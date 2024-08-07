document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('register-form');
    const loginForm = document.getElementById('login-form');

    if (registerForm) {
        registerForm.addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(registerForm);

            try {
                const response = await fetch('/register', {
                    method: 'POST',
                    body: formData,
                });

                const data = await response.json();
                if (response.ok) {
                    alert('Registration successful! Welcome, ' + data.email);
                } else {
                    // Extract the message and errors from the response data
                    let errorMessage = 'Registration failed: ' + data.message;
                    
                    // If there are specific errors, append them to the message
                    if (data.errors) {
                        for (const [field, messages] of Object.entries(data.errors)) {
                            errorMessage += `\n${field}: ${messages.join(', ')}`;
                        }
                    }
                    
                    alert(errorMessage);
                }
            } catch (error) {
                console.error('Error:', error);
            }
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(loginForm);

            try {
                const response = await fetch('/login', {
                    method: 'POST',
                    body: formData,
                });

                const data = await response.json();
                if (response.ok) {
                    alert('Login successful! Welcome back, ' + data.email);
                    // Redirect or update the UI as needed
                } else {
                    alert('Login failed: ' + data.error);
                }
            } catch (error) {
                console.error('Error:', error);
            }
        });
    }
});