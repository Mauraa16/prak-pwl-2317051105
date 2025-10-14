@if (session('success') || session('error'))
<style>
    .toast {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.9);
        z-index: 9999;
        padding: 18px 25px;
        border-radius: 12px;
        color: white;
        font-weight: 600;
        opacity: 0;
        transition: opacity 0.4s ease, transform 0.4s ease;
        box-shadow: 0 8px 20px rgba(0,0,0,0.25);
        text-align: center;
        min-width: 320px;
    }
    .toast.show {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
    .toast-success {
        background: linear-gradient(90deg, #38a169, #48bb78);
    }
    .toast-error {
        background: linear-gradient(90deg, #e53e3e, #f56565);
    }
</style>

@if (session('success'))
    <div id="toast-success" class="toast toast-success">
        ✅ {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div id="toast-error" class="toast toast-error">
        ⚠️ {{ session('error') }}
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toastSuccess = document.getElementById('toast-success');
        const toastError = document.getElementById('toast-error');

        const showToast = (toast) => {
            if (!toast) return;
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 3500);
        };

        showToast(toastSuccess);
        showToast(toastError);
    });
</script>
@endif