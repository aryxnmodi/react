// Import necessary libraries
import React, { useState } from 'react';
import './Auth.css'; // Assume we have some CSS styles

const AuthPage = () => {
    const [isLogin, setIsLogin] = useState(true); // Toggle between login and registration
    const [formData, setFormData] = useState({
        email: '',
        password: '',
        confirmPassword: '' // Only used for registration
    });

    const toggleForm = () => {
        setIsLogin(!isLogin);
        setFormData({ email: '', password: '', confirmPassword: '' }); // Reset form fields
    };

    const handleInputChange = (e) => {
        const { name, value } = e.target;
        setFormData((prev) => ({ ...prev, [name]: value }));
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (!formData.email || !formData.password) {
            alert('Please fill out all required fields.');
            return;
        }

        if (!isLogin && formData.password !== formData.confirmPassword) {
            alert('Passwords do not match.');
            return;
        }

        if (isLogin) {
            console.log('Logging in with:', formData);
            // Add login logic here
        } else {
            console.log('Registering with:', formData);
            // Add registration logic here
        }
    };

    return (
        <div className="auth-container">
            <h2>{isLogin ? 'Login' : 'Register'}</h2>
            <form onSubmit={handleSubmit} className="auth-form">
                <div className="form-group">
                    <label htmlFor="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value={formData.email}
                        onChange={handleInputChange}
                        required
                    />
                </div>
                <div className="form-group">
                    <label htmlFor="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        value={formData.password}
                        onChange={handleInputChange}
                        required
                    />
                </div>
                {!isLogin && (
                    <div className="form-group">
                        <label htmlFor="confirmPassword">Confirm Password</label>
                        <input
                            type="password"
                            id="confirmPassword"
                            name="confirmPassword"
                            value={formData.confirmPassword}
                            onChange={handleInputChange}
                            required
                        />
                    </div>
                )}
                <button type="submit" className="btn">
                    {isLogin ? 'Login' : 'Register'}
                </button>
            </form>
            <button onClick={toggleForm} className="toggle-btn">
                {isLogin ? 'Switch to Register' : 'Switch to Login'}
            </button>
        </div>
    );
};

export default AuthPage;
