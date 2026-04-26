@extends('layouts.app')

@section('content')

    <!-- Spacer for fixed header -->
    <div style="height: 100px; background: #1a1a1a;"></div>

    <section class="contact-page" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d1b4d 50%, #1a1a1a 100%); padding: 5rem 5%; color: white; min-height: 100vh;">
        <div class="container">
            <h1 class="section-title" style="color: var(--primary-pink); text-align: center; font-family: var(--font-serif); margin-bottom: 10px; font-size: 3.5rem;">Contactez-nous</h1>
            <p class="section-subtitle" style="text-align: center; color: #e0b0ff; margin-bottom: 60px; font-size: 1.2rem;">Nous sommes là pour répondre à vos questions</p>

            <div class="row" style="display: flex; flex-wrap: wrap; gap: 3rem;">
                <!-- Contact Form -->
                <div class="col-md-7" style="flex: 1; min-width: 300px; background: rgba(255, 255, 255, 0.03); padding: 3rem; border-radius: 30px; border: 1px solid rgba(255, 107, 158, 0.2); backdrop-filter: blur(10px);">
                    <h2 style="color: white; margin-bottom: 2rem; font-family: var(--font-serif);">Envoyer nous un message</h2>
                    <form action="mailto:outako638@gmail.com" method="post" enctype="text/plain">
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem; color: #ccc;">Nom complet</label>
                            <input type="text" name="name" placeholder="Votre nom" style="width: 100%; padding: 1rem; border-radius: 12px; border: 1px solid #444; background: #2d2d2d; color: white; outline: none; transition: 0.3s;">
                        </div>
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem; color: #ccc;">Email</label>
                            <input type="email" name="email" placeholder="votre@email.com" style="width: 100%; padding: 1rem; border-radius: 12px; border: 1px solid #444; background: #2d2d2d; color: white; outline: none;">
                        </div>
                        <div style="margin-bottom: 2rem;">
                            <label style="display: block; margin-bottom: 0.5rem; color: #ccc;">Message</label>
                            <textarea name="message" rows="5" placeholder="Comment pouvons-nous vous aider ?" style="width: 100%; padding: 1rem; border-radius: 12px; border: 1px solid #444; background: #2d2d2d; color: white; outline: none; resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn-primary" style="width: 100%; padding: 1.2rem; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; cursor: pointer;">Envoyer le message</button>
                    </form>
                </div>

                <!-- Info & Map -->
                <div class="col-md-5" style="flex: 0.8; min-width: 300px; display: flex; flex-direction: column; gap: 2rem;">
                    <!-- Information Box -->
                    <div style="background: linear-gradient(135deg, rgba(138, 43, 226, 0.1), rgba(255, 107, 158, 0.1)); padding: 2.5rem; border-radius: 30px; border: 1px solid rgba(138, 43, 226, 0.2);">
                        <h3 style="color: var(--primary-pink); margin-bottom: 1.5rem; font-family: var(--font-serif);">Nos Informations</h3>
                        
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                            <div style="width: 50px; height: 50px; background: rgba(255, 107, 158, 0.1); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: var(--primary-pink);">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <p style="color: #999; font-size: 0.9rem; margin-bottom: 2px;">Email</p>
                                <p style="font-weight: 600;">outako638@gmail.com</p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 1rem;">
                            <div style="width: 50px; height: 50px; background: rgba(138, 43, 226, 0.1); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: #8a2be2;">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <p style="color: #999; font-size: 0.9rem; margin-bottom: 2px;">Téléphone</p>
                                <p style="font-weight: 600;">0635266609</p>
                            </div>
                        </div>
                    </div>

                    <!-- Google Map -->
                    <div style="flex: 1; border-radius: 30px; overflow: hidden; border: 1px solid rgba(255, 255, 255, 0.1); min-height: 300px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.940445209376!2d-6.840742!3d34.019553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8941743666f7%3A0x6b1f2e8f1993466a!2sMcDonald&#39;s!5e0!3m2!1sen!2sma!4v1714154433123!5m2!1sen!2sma" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection