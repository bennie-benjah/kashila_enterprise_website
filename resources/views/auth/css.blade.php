<style>
    /* Auth Styles */
.login-container {
    padding: 2rem 0;
    min-height: calc(100vh - 120px); /* Adjust based on header/footer height */
    display: flex;
    align-items: center;
}

.login-card {
    border: none;
    border-radius: 1rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    overflow: hidden;
    background: #ffffff;
}

.login-card .card-body {
    padding: 2.5rem;
}

.login-header {
    color: #2a2a2a;
    font-weight: 700;
    font-size: 1.75rem;
    margin-bottom: 2rem;
    position: relative;
    text-align: center;
}

.login-header:after {
    content: '';
    display: block;
    width: 50px;
    height: 3px;
    background: #2563eb;
    margin: 1rem auto 0;
}

.form-label {
    font-weight: 600;
    color: #374151;
    margin-bottom: 0.5rem;
}

.form-control-lg {
    border-radius: 0.75rem;
    padding: 1rem 1.25rem;
    border: 2px solid #e5e7eb;
    transition: all 0.3s ease;
}

.form-control-lg:focus {
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.invalid-feedback {
    font-weight: 500;
    margin-top: 0.5rem;
}

.remember-forgot {
    font-size: 0.9rem;
}

.btn-login {
    background: #2563eb;
    color: white;
    padding: 1rem;
    font-weight: 600;
    border-radius: 0.75rem;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-login:hover {
    background: #1d4ed8;
    transform: translateY(-1px);
}

.forgot-password-link {
    color: #6b7280;
    transition: color 0.2s ease;
}

.forgot-password-link:hover {
    color: #2563eb;
    text-decoration: none;
}

.form-check-input {
    width: 1.1em;
    height: 1.1em;
    margin-top: 0.18em;
}

.form-check-input:checked {
    background-color: #2563eb;
    border-color: #2563eb;
}

/* Responsive Design */
@media (max-width: 576px) {
    .login-card .card-body {
        padding: 1.5rem;
    }

    .login-header {
        font-size: 1.5rem;
    }
}
/* Social Login Buttons - Horizontal */
.social-login {
    display: flex;
    justify-content: center;
    gap: 1rem; /* Space between buttons */
}

.social-login .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 0.75rem 1rem;
    font-size: 0.9rem;
    border-radius: 5px;
}

/* Google Button */
.btn-google {
    background: #fff;
    color: #757575 !important;
    border: 1px solid #e0e0e0;
}

.btn-google:hover {
    background: #f8f9fa;
    border-color: #d2d2d2;
}

/* Facebook Button */
.btn-facebook {
    background: #1877f2;
    color: #fff !important;
}

.btn-facebook:hover {
    background: #166fe5;
}

/* Divider */
.divider {
    position: relative;
    text-align: center;
    margin: 1.5rem 0;
}

.divider-text {
    padding: 0 1rem;
    background: white;
    position: relative;
    z-index: 1;
    color: #6b7280;
    font-size: 0.875rem;
}

.divider:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 1px;
    background: #e5e7eb;
    z-index: 0;
}

/* Responsive Adjustments */
@media (max-width: 576px) {
    .social-login {
        flex-direction: column;
        align-items: center;
    }

    .social-login .btn {
        width: 80%;
        font-size: 0.85rem;
        padding: 0.6rem;
    }

    .social-login .btn svg {
        margin-right: 0.3rem;
        width: 16px;
        height: 16px;
    }
}

</style>
