<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Upload Cerita Rakyat</title>

<style>
/* ===== GLOBAL ===== */
/* ===== GLOBAL ===== */
body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:#f2f2f2;
    padding:40px;
}

/* BUTTON OPEN */
.btn-open{
    background:linear-gradient(135deg,#6b3b00,#9c5a14);
    color:#fff;
    border:none;
    padding:14px 30px;
    border-radius:14px;
    cursor:pointer;
    font-size:14px;
    font-weight:500;
    box-shadow:0 6px 16px rgba(0,0,0,.25);
    transition:.3s;
}
.btn-open:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 22px rgba(0,0,0,.35);
}

/* ===== MODAL OVERLAY ===== */
.modal-overlay{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.65);
    backdrop-filter:blur(4px);
    justify-content:center;
    align-items:center;
    z-index:999;
}

/* ===== MODAL BOX ===== */
.modal{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.65);
    backdrop-filter:blur(4px);
    z-index:2000;
}

.modal-content{
    background:#fff;
    max-width:700px;
    margin:80px auto;
    padding:35px 40px;
    border-radius:22px;
    box-shadow:0 25px 60px rgba(0,0,0,.45);
    position:relative;
    animation:fadeUp .35s ease;
}

@keyframes fadeUp{
    from{
        transform:translateY(30px) scale(.96);
        opacity:0;
    }
    to{
        transform:translateY(0) scale(1);
        opacity:1;
    }
}
/* HEADER */
.modal h2{
    margin-top:0;
    margin-bottom:30px;
    color:#6b3b00;
    font-size:24px;
    letter-spacing:.5px;
}

/* CLOSE */
.close{
    position:absolute;
    top:22px;
    right:26px;
    font-size:24px;
    cursor:pointer;
    color:#777;
    transition:.2s;
}
.close:hover{
    color:#000;
}

/* ===== FORM ===== */
.form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:22px;
}

/* INPUT & TEXTAREA */
.modal input,
.modal textarea{
    width:100%;
    padding:14px 16px;
    border-radius:14px;
    border:1px solid #ddd;
    font-size:14px;
    background:#fafafa;
    transition:.25s;
}

.modal input::placeholder,
.modal textarea::placeholder{
    color:#aaa;
}

.modal input:focus,
.modal textarea:focus{
    outline:none;
    background:#fff;
    border-color:#6b3b00;
    box-shadow:0 0 0 3px rgba(107,59,0,.15);
}

/* TEXTAREA */
.modal textarea{
    grid-column:span 2;
    height:180px;
    resize:none;
}

/* FILE INPUT */
.modal input[type="file"]{
    grid-column:span 2;
    padding:10px;
    background:#fff;
}

/* SUBMIT */
.modal button{
    grid-column:span 2;
    margin-top:10px;
    background:linear-gradient(135deg,#6b3b00,#9c5a14);
    color:#fff;
    border:none;
    padding:14px;
    border-radius:16px;
    font-size:15px;
    font-weight:500;
    cursor:pointer;
    transition:.3s;
}

.modal button:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 18px rgba(0,0,0,.35);
}


</style>
</head>

<body>

<!-- BUTTON -->
<button class="btn-open" onclick="openModal()">+ Upload Cerita Rakyat</button>

<!-- MODAL -->
<div class="modal-overlay"

