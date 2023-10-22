<!DOCTYPE html>
<html lang="es-co">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="\proyecto_rupture\img\unnamed.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap');

            :root {
                --color-neutral-10: #0e0c0c;
                --color-neutral-0: #171717;
                --color-neutral-30: #a8a29e;
                --color-neutral-40: #f5f5f5;

            }

            footer img{
                max-width: 5rem;
                margin-bottom: 1rem;
            }
            footer {
                z-index: 4;
                width: 100%;
                color: var(--color-neutral-40);
            }

            .footer-link {
                text-decoration: none;
            }

            #footer_content {
                background-color: var(--color-neutral-10);
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                padding: 3rem 3.5rem;
            }

            #footer_contacts h1 {
                margin-bottom: 0.75rem;
            }

            #footer_social_media {
                display: flex;
                gap: 2rem;
                margin-top: 1.5rem;
            } 

            #footer_social_media .footer-link {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 2.5rem;
                width: 2.5rem;
                color: var(--color-neutral-40);
                border-radius: 50%;
                transition: all 0.4s;
            }

            #footer_social_media .footer-link i {
                font-size: 1.25rem;    
            }

            #footer_social_media .footer-link:hover {
                opacity: 0.8;
            }

            #instagram {
                background-color:#C30E0E;
            }

            #facebook {
                background-color: #C30E0E;
            }

            #whatsapp {
                background-color: #C30E0E;
            }

            .footer-list {
                display: flex;
                flex-direction: column;
                gap: 2rem;
                list-style: none;
            }

            .footer-list .footer-link {
                color: var(--color-neutral-30);
                transition: all 0.4s;
            }

            .footer-list .footer-link:hover {
                color: #C30E0E;
            }

            #footer_subscribe {
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
            }

            #footer_subscribe p {
                color: var(--color-neutral-30);
            }

            #input_group {
                display: flex;
                align-items: center;
                background-color: var(--color-neutral-0);
                border-radius: 4px;
            }

            #input_group input {
                all: unset;
                padding: 0.75rem;
                width: 100%;
            }

            #input_group button {
                background-color: #C30E0E;
                border: none;
                color: var(--color-neutral-40);
                padding: 0px 1.25rem;
                font-size: 1.125rem;
                height: 100%;
                border-radius: 0px 4px 4px 0px;
                cursor: pointer;
                transition: all 0.4s;
            }

            #input_group button:hover {
                opacity: 0.8;
            }

            #footer_copyright {
                display: flex;
                justify-content: center;
                background-color: var(--color-neutral-0);
                font-size: 0.9rem;
                padding: 1.5rem;
                font-weight: 100;
            }

            @media screen and (max-width: 768px) {
                #footer_content {
                    grid-template-columns: repeat(2, 1fr);
                    gap: 2rem;
                }
            }

            @media screen and (max-width: 426px) {
                #footer_content {
                    grid-template-columns: repeat(1, 1fr);
                    padding: 3rem 2rem;
                }
            }
                    div:where(.swal2-container).swal2-center>.swal2-popup {
        background-color: black !important;
        }

        div:where(.swal2-icon).swal2-info{
        border-color:  #A21112 !important;
        color: #A21112 !important;
        }

        div:where(.swal2-container) h2:where(.swal2-title) {
        color: white !important;
        }

        div:where(.swal2-container) .swal2-html-container{
        color: white !important;
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm{
        background-color: #E40b0b !important ;
        }
        a {
        text-decoration: none;
        color: black;
        }


        div:where(.swal2-container) img:where(.swal2-image){
            display: flex;
            background: url("https://th.bing.com/th/id/OIP._ehnMv6LdATGvAXZW-VzfQHaEE?pid=ImgDet&rs=1") !important;
            z-index: 99;
        }
    </style>
    <title>Responsive Footer</title>
</head>
<body>
    <main>
        
    </main>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <img src="\proyecto_rupture\img\unnamed.png">
                <h2>ATOM RUPTURE</h2>
                <p>Tu casa, tu gimnasio</p>

                <div id="footer_social_media">
                    <a href="https://www.instagram.com/atomrupture/" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>Legal</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Terminos y condiciones</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Membresias</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Nosotros</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Que es atom rupture?</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Planes a futuro</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Unete!</h3>

                <p>
                    Ingresa tu correo para estar al tanto 
                    de la familia rupture :)
                </p>

                <div onclick="sendMail();" id="input_group">
                    <input type="email" name="user_email" id="email">
                    <button onclick="ready()" type="submit">
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            &#169
            2023 todos los derechos reservados
        </div>
    </footer>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    
    <script>

        const contactEmail = document.getElementById('email');

        function sendMail(){
            (function(){
                emailjs.init("Kf0AScj6T7kN67w77"); //Codigo pública
            })();

            var params = {
                to: document.querySelector("#email").value,
            };

            var serviceID = "service_hwcapab";
            var templateID = "template_mnfsv59";

            emailjs.send(serviceID, templateID, params)
            .then(res =>{
                Swal.fire({
                icon: 'success',
                title: 'Correo registrado',
                showConfirmButton: false,
                timer: 5000
                })
                })
            .catch();

            contactEmail.value = '';
        }

    </script>

</body>
</html>