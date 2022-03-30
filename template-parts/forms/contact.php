<div class="mb-3">
    <label class="form-label" for="name">Votre nom</label>
    [text* your-name id:name class:form-control]
</div>

<div class="mb-3">
    <label class="form-label" for="email">Votre e-mail</label>
    [email* your-email id:email class:form-control]
</div>

<div class="mb-3">
    <label class="form-label" for="subject">Objet</label>
    [text* your-subject id:subject class:form-control]
</div>

<div class="mb-3">
    <label class="form-label" for="body">Votre message</label>
    [textarea your-message id:body class:form-control]
</div>

[submit class:btn class:btn-primary "Envoyer"]