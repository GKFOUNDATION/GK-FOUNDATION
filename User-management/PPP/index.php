import React, { useState } from 'react';
import { Users, UserPlus, Shield, Trash2, Power, Key, Eye, Mail } from 'lucide-react';

// ============================================
// OOP CLASSES IMPLEMENTATION
// ============================================

// Interface simulation using classes
class Authenticatable {
  authenticate(password) { throw new Error("Must implement authenticate"); }
  getRole() { throw new Error("Must implement getRole"); }
}

class Notifiable {
  sendNotification(message) { throw new Error("Must implement sendNotification"); }
}

// Abstract base class - Person
class Person {
  static instanceCount = 0;
  static allPersons = [];

  constructor(name, email) {
    this.id = `user_${Date.now()}_${Math.random().toString(36).substr(2, 9)}`;
    this.name = name;
    this.email = email;
    this.createdAt = new Date();
    
    Person.instanceCount++;
    Person.allPersons.push(this);
  }

  getId() { return this.id; }
  getName() { return this.name; }
  getEmail() { return this.email; }
  setName(name) { this.name = name; }

  // Abstract method - must be implemented by child classes
  getDisplayInfo() {
    throw new Error("Abstract method must be implemented");
  }

  // Magic method: __toString equivalent
  toString() {
    return `${this.name} (${this.email})`;
  }

  static getInstanceCount() {
    return Person.instanceCount;
  }

  static getAllPersons() {
    return Person.allPersons;
  }
}

// User class - extends Person, implements interfaces
class User extends Person {
  constructor(name, email, password, role = 'user') {
    super(name, email);
    this.password = this.hashPassword(password);
    this.role = role;
    this.isActive = true;
    this.metadata = {};
    this.notifications = [];
  }

  // Private method simulation
  hashPassword(password) {
    return btoa(password); // Simple encoding for demo
  }

  // Interface: Authenticatable
  authenticate(password) {
    return this.hashPassword(password) === this.password;
  }

  getRole() {
    return this.role;
  }

  // Interface: Notifiable
  sendNotification(message) {
    const notification = {
      message,
      timestamp: new Date(),
      read: false
    };
    this.notifications.push(notification);
    return `📧 Notification sent to ${this.email}: ${message}`;
  }

  // Method overriding
  getDisplayInfo() {
    const status = this.isActive ? 'Active' : 'Inactive';
    return `User: ${this.getName()} | Role: ${this.role} | Status: ${status}`;
  }

  deactivate() {
    this.isActive = false;
    return this.sendNotification("Your account has been deactivated.");
  }

  activate() {
    this.isActive = true;
    return this.sendNotification("Your account has been activated.");
  }

  changePassword(oldPassword, newPassword) {
    if (this.authenticate(oldPassword)) {
      this.password = this.hashPassword(newPassword);
      this.sendNotification("Password changed successfully.");
      return true;
    }
    return false;
  }

  // Magic methods: __get and __set simulation
  setMetadata(key, value) {
    this.metadata[key] = value;
  }

  getMetadata(key) {
    return this.metadata[key] || null;
  }
}

// Administrator class - extends User
class Administrator extends User {
  constructor(name, email, password) {
    super(name, email, password, 'admin');
    this.permissions = ['create', 'read', 'update', 'delete', 'manage_users'];
  }

  // Method overriding
  getDisplayInfo() {
    return `👑 Administrator: ${this.getName()} | Permissions: ${this.permissions.length}`;
  }

  getPermissions() {
    return this.permissions;
  }

  manageUser(user, action) {
    let result = `Admin ${this.getName()} performing '${action}' on ${user.getName()}`;
    
    if (action === 'deactivate') {
      user.deactivate();
    } else if (action === 'activate') {
      user.activate();
    }
    
    return result;
  }
}

// Static utility class
class UserValidator {
  static validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  static validatePassword(password) {
    const errors = [];
    
    if (password.length < 8) {
      errors.push("Password must be at least 8 characters");
    }
    if (!/[A-Z]/.test(password)) {
      errors.push("Must contain at least one uppercase letter");
    }
    if (!/[a-z]/.test(password)) {
      errors.push("Must contain at least one lowercase letter");
    }
    if (!/[0-9]/.test(password)) {
      errors.push("Must contain at least one number");
    }
    
    return errors;
  }
}

// Static manager class
class UserManager {
  static users = [];

  static registerUser(name, email, password) {
    if (!UserValidator.validateEmail(email)) {
      return { success: false, message: "Invalid email format" };
    }

    const passwordErrors = UserValidator.validatePassword(password);
    if (passwordErrors.length > 0) {
      return { success: false, message: "Password validation failed", errors: passwordErrors };
    }

    const user = new User(name, email, password);
    UserManager.users.push(user);
    
    return { success: true, message: "User registered successfully", user };
  }

  static registerAdmin(name, email, password) {
    if (!UserValidator.validateEmail(email)) {
      return { success: false, message: "Invalid email format" };
    }

    const admin = new Administrator(name, email, password);
    UserManager.users.push(admin);
    
    return { success: true, message: "Administrator registered successfully", user: admin };
  }

  static getAllUsers() {
    return UserManager.users;
  }

  static deleteUser(userId) {
    const index = UserManager.users.findIndex(u => u.getId() === userId);
    if (index !== -1) {
      UserManager.users.splice(index, 1);
      return { success: true, message: "User deleted successfully" };
    }
    return { success: false, message: "User not found" };
  }

  static findUserById(id) {
    return UserManager.users.find(u => u.getId() === id) || null;
  }
}

// ============================================
// REACT UI COMPONENT
// ============================================

export default function UserManagementSystem() {
  const [users, setUsers] = useState([]);
  const [showAddUser, setShowAddUser] = useState(false);
  const [showAddAdmin, setShowAddAdmin] = useState(false);
  const [selectedUser, setSelectedUser] = useState(null);
  const [notification, setNotification] = useState(null);

  const [formData, setFormData] = useState({
    name: '',
    email: '',
    password: ''
  });

  const showNotification = (message, type = 'success') => {
    setNotification({ message, type });
    setTimeout(() => setNotification(null), 3000);
  };

  const handleAddUser = (isAdmin = false) => {
    const result = isAdmin 
      ? UserManager.registerAdmin(formData.name, formData.email, formData.password)
      : UserManager.registerUser(formData.name, formData.email, formData.password);

    if (result.success) {
      setUsers(UserManager.getAllUsers());
      setFormData({ name: '', email: '', password: '' });
      setShowAddUser(false);
      setShowAddAdmin(false);
      showNotification(result.message);
    } else {
      showNotification(result.message + (result.errors ? '\n' + result.errors.join('\n') : ''), 'error');
    }
  };

  const handleDeleteUser = (userId) => {
    const result = UserManager.deleteUser(userId);
    if (result.success) {
      setUsers(UserManager.getAllUsers());
      showNotification(result.message);
    }
  };

  const handleToggleActive = (userId) => {
    const user = UserManager.findUserById(userId);
    if (user) {
      if (user.isActive) {
        user.deactivate();
      } else {
        user.activate();
      }
      setUsers([...UserManager.getAllUsers()]);
      showNotification(`User ${user.isActive ? 'activated' : 'deactivated'}`);
    }
  };

  const handleChangePassword = (userId) => {
    const user = UserManager.findUserById(userId);
    if (user) {
      const oldPassword = prompt('Enter current password:');
      const newPassword = prompt('Enter new password:');
      
      if (oldPassword && newPassword) {
        const success = user.changePassword(oldPassword, newPassword);
        if (success) {
          showNotification('Password changed successfully');
        } else {
          showNotification('Current password is incorrect', 'error');
        }
      }
    }
  };

  return (
    <div className="min-h-screen bg-gradient-to-br from-purple-600 via-blue-600 to-indigo-700 p-6">
      {/* Notification */}
      {notification && (
        <div className={`fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 ${
          notification.type === 'success' ? 'bg-green-500' : 'bg-red-500'
        } text-white`}>
          {notification.message}
        </div>
      )}

      <div className="max-w-6xl mx-auto">
        {/* Header */}
        <div className="bg-white rounded-2xl shadow-2xl p-8 mb-6">
          <div className="flex items-center justify-between">
            <div>
              <h1 className="text-4xl font-bold text-gray-800 flex items-center gap-3">
                <Users className="text-purple-600" size={40} />
                User Management System
              </h1>
              <p className="text-gray-600 mt-2">Demonstrating OOP Concepts in Action</p>
            </div>
            <div className="text-right">
              <div className="text-3xl font-bold text-purple-600">{users.length}</div>
              <div className="text-gray-600 text-sm">Total Users</div>
            </div>
          </div>
        </div>

        {/* Action Buttons */}
        <div className="bg-white rounded-2xl shadow-2xl p-6 mb-6">
          <div className="flex gap-4 flex-wrap">
            <button
              onClick={() => setShowAddUser(true)}
              className="flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition shadow-lg"
            >
              <UserPlus size={20} />
              Add User
            </button>
            <button
              onClick={() => setShowAddAdmin(true)}
              className="flex items-center gap-2 bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition shadow-lg"
            >
              <Shield size={20} />
              Add Administrator
            </button>
          </div>
        </div>

        {/* Add User Form */}
        {(showAddUser || showAddAdmin) && (
          <div className="bg-white rounded-2xl shadow-2xl p-6 mb-6">
            <h2 className="text-2xl font-bold mb-4 text-gray-800">
              {showAddAdmin ? 'Add Administrator' : 'Add User'}
            </h2>
            <div className="space-y-4">
              <input
                type="text"
                placeholder="Full Name"
                value={formData.name}
                onChange={(e) => setFormData({...formData, name: e.target.value})}
                className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:outline-none"
              />
              <input
                type="email"
                placeholder="Email Address"
                value={formData.email}
                onChange={(e) => setFormData({...formData, email: e.target.value})}
                className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:outline-none"
              />
              <input
                type="password"
                placeholder="Password (min 8 chars, 1 uppercase, 1 number)"
                value={formData.password}
                onChange={(e) => setFormData({...formData, password: e.target.value})}
                className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:outline-none"
              />
              <div className="flex gap-3">
                <button
                  onClick={() => handleAddUser(showAddAdmin)}
                  className="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition"
                >
                  Create {showAddAdmin ? 'Administrator' : 'User'}
                </button>
                <button
                  onClick={() => {
                    setShowAddUser(false);
                    setShowAddAdmin(false);
                    setFormData({ name: '', email: '', password: '' });
                  }}
                  className="bg-gray-400 text-white px-6 py-3 rounded-lg hover:bg-gray-500 transition"
                >
                  Cancel
                </button>
              </div>
            </div>
          </div>
        )}

        {/* Users List */}
        <div className="bg-white rounded-2xl shadow-2xl p-6">
          <h2 className="text-2xl font-bold mb-4 text-gray-800">All Users</h2>
          
          {users.length === 0 ? (
            <div className="text-center py-12 text-gray-500">
              <Users size={64} className="mx-auto mb-4 opacity-30" />
              <p className="text-lg">No users yet. Add your first user to get started!</p>
            </div>
          ) : (
            <div className="grid gap-4">
              {users.map((user) => (
                <div
                  key={user.getId()}
                  className={`p-5 rounded-xl border-2 transition ${
                    user.isActive
                      ? 'border-green-300 bg-green-50'
                      : 'border-red-300 bg-red-50'
                  }`}
                >
                  <div className="flex items-start justify-between">
                    <div className="flex-1">
                      <div className="flex items-center gap-3 mb-2">
                        {user.getRole() === 'admin' ? (
                          <Shield className="text-purple-600" size={24} />
                        ) : (
                          <Users className="text-blue-600" size={24} />
                        )}
                        <h3 className="text-xl font-bold text-gray-800">
                          {user.getName()}
                        </h3>
                        <span className={`px-3 py-1 rounded-full text-sm font-semibold ${
                          user.isActive
                            ? 'bg-green-200 text-green-800'
                            : 'bg-red-200 text-red-800'
                        }`}>
                          {user.isActive ? 'Active' : 'Inactive'}
                        </span>
                      </div>
                      
                      <div className="space-y-1 text-gray-700">
                        <div className="flex items-center gap-2">
                          <Mail size={16} />
                          <span>{user.getEmail()}</span>
                        </div>
                        <div className="flex items-center gap-2">
                          <Shield size={16} />
                          <span>Role: <strong>{user.getRole()}</strong></span>
                        </div>
                        <div className="text-sm text-gray-500">
                          ID: {user.getId()}
                        </div>
                        <div className="text-sm text-gray-500">
                          Created: {user.createdAt.toLocaleString()}
                        </div>
                        {user.notifications.length > 0 && (
                          <div className="mt-2 p-2 bg-blue-50 rounded text-sm">
                            <strong>Notifications ({user.notifications.length}):</strong>
                            <div className="mt-1 space-y-1">
                              {user.notifications.slice(-2).map((notif, idx) => (
                                <div key={idx} className="text-xs text-gray-600">
                                  • {notif.message}
                                </div>
                              ))}
                            </div>
                          </div>
                        )}
                      </div>
                    </div>

                    <div className="flex gap-2">
                      <button
                        onClick={() => handleToggleActive(user.getId())}
                        className={`p-2 rounded-lg transition ${
                          user.isActive
                            ? 'bg-red-100 hover:bg-red-200 text-red-700'
                            : 'bg-green-100 hover:bg-green-200 text-green-700'
                        }`}
                        title={user.isActive ? 'Deactivate' : 'Activate'}
                      >
                        <Power size={20} />
                      </button>
                      <button
                        onClick={() => handleChangePassword(user.getId())}
                        className="p-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-lg transition"
                        title="Change Password"
                      >
                        <Key size={20} />
                      </button>
                      <button
                        onClick={() => handleDeleteUser(user.getId())}
                        className="p-2 bg-red-100 hover:bg-red-200 text-red-700 rounded-lg transition"
                        title="Delete User"
                      >
                        <Trash2 size={20} />
                      </button>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          )}
        </div>

        {/* OOP Concepts Footer */}
        <div className="bg-white rounded-2xl shadow-2xl p-6 mt-6">
          <h3 className="text-lg font-bold text-gray-800 mb-3">OOP Concepts Demonstrated:</h3>
          <div className="flex flex-wrap gap-2">
            {[
              'Classes & Objects',
              'Encapsulation',
              'Inheritance',
              'Polymorphism',
              'Abstract Classes',
              'Interfaces',
              'Static Methods',
              'Magic Methods',
              'Method Overriding'
            ].map((concept) => (
              <span key={concept} className="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold">
                {concept}
              </span>
            ))}
          </div>
        </div>
      </div>
    </div>
  );
}