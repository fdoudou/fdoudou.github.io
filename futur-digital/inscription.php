<!DOCTYPE html>
<html>
    <head>
        <script src="https://apis.google.com/js/api:client.js"></script>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v18.0" nonce="hv4dhQJG"></script>
        <!-- Required meta tags -->
        <meta name="google-signin-client_id" content="530727452489-5jb2hi00lcogarauq2lmq5o7gkhr6evg.apps.googleusercontent.com">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>
        <style>
            body {
                font-family: 'Source Sans Pro',
                /* Safari pour macOS and iOS (San Francisco) */
                -apple-system,
                /* Windows */
                "Segoe UI",
                /* Android */
                Roboto,
                /* Basic web fallback */
                "Helvetica Neue", Arial,
                /* Linux */
                "Noto Sans",
                "Liberation Sans";
                background-image:url("images/bg-img-bubbles.png");
                background-repeat: repeat;
                background-size: cover;
                background-color:#fff;
            }

            /*L'icone de l'oeil est positionnée à droite du champ de saisi devant la contenir*/
            .eye-hint {
                position:absolute;
                right:20px;
                top:10px;
                cursor:pointer
            }

            .is-hidden {
                display:none
            }

            .is-visible {
                display:block
            }
           
            .fs-9 {
                font-size:small
            }

            .fs-10 {
                font-size:x-small
            }
        /*On positionne l'icone d'inscription en haut du formulaire...*/
            .registration-top-img {
                position:relative;
                top:-20px;
            }
        /*...et sur la partie gauche sur ordinateurs et tablettes...*/
            @media (min-width:768px) {
                .registration-top-img {
                    width:50px;
                    left:20px
                }

                .lg-incitative-registration-img {
                    display:block
                }

                .sm-incitative-registration-img {
                    display:none
                }
            }
        /*...et au centre sur mobile*/
            @media (max-width:767px) {
                .registration-top-img {
                    width:75px;
                    left:50%;
                    transform:translate(-50%,0%);
                }

                .lg-incitative-registration-img {
                    display:none
                }

                .sm-incitative-registration-img {
                    display:block
                }
            }
        </style>
    </head>
    <body>
        <div class="container gap-4 mt-5">
            
            <div class="row">
                
                <div class="col-md-6 col-sm-12 border border-1 rounded order-1 order-sm-1 order-md-0 bg-white">
                    <div style="" class="registration-top-img rounded">
                        <img src="images/log-img.png" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="h5 mt-1 mb-3 mx-3 text-secondary">
                        Inscrivez-vous
                    </div>

                    <form method="POST" action="" class="mx-3 needs-validation" name="regisForm" novalidate>
                        <div class="mb-3 form-floating">
                            <input name="username" type="text" class="form-control form-control-sm rounded f-input invalid " id="InputUsername" placeholder="Nom complet" required autofocus>
                            <label for="InputUsername">Nom complet</label>
                            <div id="usernameHelp" class="form-text fs-10 text- invalid-feedback">Veuillez renseigner votre prénom et votre nom. Ex: Doudou Fall.</div>
                        </div>

                        <div class="mb-3 form-floating">
                            <input name="email" type="email" class="form-control rounded f-input" id="InputEmail" aria-describedby="emailHelp" placeholder="Address email" required>
                            <label for="InputEmail">Address email</label>
                            <div id="emailHelp" class="form-text fs-10 text- invalid-feedback">L'adresse email saisie n'est pas correcte! L'email saisie doit etre au format: mon@email.com</div>
                        </div>

                        <div class="mb-3 form-floating">
                            <input name="password" type="password" class="form-control rounded f-input pass" aria-describedby="passwordHelp" id="InputPassword0" placeholder="Mot de passe" required>
                            <span onclick="toggleVisibility('#InputPassword0','#hiddenChar0')" class="eye-hint"><svg id='hiddenChar0' class="is-hidden eye-hint" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye-slash" role="img" xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 640 512"><path fill="currentColor" d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path></svg> <svg class=" eye-hint" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 640 512" class="svg-inline--fa fa-eye fa-w-18"><path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg></span>
                            <label for="InputPassword1">Mot de passe</label>
                            <div id="passwordHelp" class="form-text fs-10 text- invalid-feedback pass-hint">Le mot de passe doit contenir minimum 10 caractères dont 1 caractère spécial.</div>
                        </div>
                        
                        <div class="mb-3 form-floating">
                            <input name="passwordbis" type="password" class="form-control rounded f-input pass" id="InputPassword1" placeholder="Confirmer mot de passe" aria-describedby="passwordHelp1" required>
                            <span onclick="toggleVisibility('#InputPassword1','#hiddenChar1')" class="is- eye-hint"><svg id='hiddenChar1' class="is-hidden eye-hint" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye-slash" role="img" xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 640 512"><path fill="currentColor" d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path></svg> <svg class=" eye-hint" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 640 512" class="svg-inline--fa fa-eye fa-w-18"><path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg></span>
                            <label for="InputPassword2">Confirmer mot de passe</label>
                            <div id="passwordHelp1" class="form-text fs-10 text- invalid-feedback pass-hint">Les mots de passe saisis doivent etre identiques.</div>
                        </div>
                        
                        <div class="row mx-0">
                            <div class="mb-3 form-check col-12 col-sm-12 col-md-6">
                                <input name="rememberme" type="checkbox" class="form-check-input" id="Check1">
                                <label class="form-check-label fs-9 text-black" for="Check1">Se souvenir de moi</label>
                            </div>
                            <div class="mb-2 d-grid col-12 col-sm-12 col-md-6">
                                <button id="submit" name="gobtn" style="background:linear-gradient(#5170ff,#8c52ff)" type="submit" class="btn px-2 rounded border-0 btn-success">S'inscrire</button>
                            </div>
                        </div>

                        <div class="mb-4 mt-4 pt-4 gap-3">
                            <div class="d-grid gap-3 col-12 col-xs-12 col-sm-12 col-md-9 mx-auto">
                                <button style="background:#3b5999;border:#3b5999" class="btn p-2 rounded btn-primary fb-login-button" type="button" data-auto-logout-link="false" data-use-continue-as="false"><svg class="icon" role="img" height="24" width="24" aria-hidden="true" fill="white" viewBox="0 0 24 24" data-encore-id="icon"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.093 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.563V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path></svg>S'inscrire avec FaceBook</button>
                                
                                <button onclick="onSignIn()" id="gSignInWrapper" data-onsuccess="onSignIn" class="btn p- px-3 rounded btn-primary" type="button"><svg class="icon" fill="currentColor" role="img" height="24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"></path></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"></use></clipPath><path clip-path="url(#b)"  d="M0 37V11l17 13z"></path><path clip-path="url(#b)"  d="M0 11l17 13 7-6.1L48 14V0H0z"></path><path clip-path="url(#b)"  d="M0 37l30-23 7.9 1L48 0v48H0z"></path><path clip-path="url(#b)"  d="M48 48L17 24l-4-3 35-10z"></path></svg>S'inscrire avec Google</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div style="width:100%" class="sm-incitative--img">
                        <img src="images/incentive-img.png" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
            <div style="width:100%" class="position-relative mt-4 mb-4">
                <img style="width:150px" src="images/logo-white.svg" class="position-absolute top-50 start-50 translate-middle" alt="...">
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script>
            'use strict'

            // On selecton le formulaire à valider
            var rform = document.forms.regisForm
            var form = document.querySelector('.needs-validation')

            // On bloque sa soumission tant que l'un des inputs ne satisfait pas les critères de validation
            form.addEventListener('submit', validateForm, false)
            
            // Ici on spécifie les critères de validation au cas par cas
            function validateForm(event) {
                let pass = document.getElementsByClassName('pass')
                let passHint = document.getElementsByClassName('pass-hint')
                let submitBtn = document.querySelector("#submit")
                let emailHint = document.querySelector("#emailHelp")
                let correctEmail = /[@.]/.test(document.querySelector("#InputEmail").value)
                let isFormClean = true;

                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } 

                form.classList.add('was-validated')

                // On vérifie si l'email est au bon format
                if (!correctEmail) {
                    event.preventDefault()
                }

                // On change dynamiquement le style (ajout/rétraction) des champs de mot de passe en fonction de leurs validités
                for (let c = 0; c < pass.length; c++) {
                    if (!checkPassword(pass[c]) || pass[0].value !== pass[1].value) {
                        pass[c].classList.remove("is-valid")
                        pass[c].classList.add("is-invalid")
                        pass[c].classList.add("invalid")
                        pass[c].classList.add("border-danger")
                        pass[c].style.backgroundImage="url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e\")";
                        event.preventDefault()
                    } else {
                        pass[c].classList.remove("is-invalid")
                        pass[c].classList.add("is-valid")
                        pass[c].classList.add("valid")
                        pass[c].classList.remove("border-danger")
                        pass[c].style.backgroundImage=""
                    }
                }
            }

            // Cette fonction permet de faire une permuttation entre la visibilité du mot de passe en jouant avec son attribut 'type'
            function toggleVisibility(inputField,eyeIcon) {
                document.querySelector(eyeIcon).classList.toggle("is-visible")
                if (document.querySelector(inputField).type=="password") {
                    document.querySelector(inputField).type = "text"
                } else {
                    document.querySelector(inputField).type = "password"
                }
            }

        // On définie les critères de validation du mot de passe (longeur,charactères spéciaux,..)
        function checkPassword(inputField) {
            var correctPassword = /[@?&#$%-+=^!~]/.test(inputField.value);
            let ls = inputField.parentNode
            if (!correctPassword || inputField.value.length < 10) {
                return false
            }
            return true
        }
        </script>
    </body>
</html>