<?php

/* Template Name: Contact */

get_header(); ?>


<section>
    <div class="container">
        <div>
            <h1>Nous contacter</h1>
            <span>Décrivez votre demande d'enquête dans le formulaire ci-dessous</span>
        </div>
        <form class="row g-3">
            <div class="row g-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Prénom" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nom" aria-label="Last name">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                       placeholder="prenom.nom@gmail.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Votre demande</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>

    </div>


</section>

<?php get_footer(); ?>

