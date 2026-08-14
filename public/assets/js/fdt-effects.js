document.addEventListener("DOMContentLoaded", waitForPreloader);

function waitForPreloader(){
     const check = setInterval(() => {
        if (!document.querySelector('#preloader')) {
            clearInterval(check);
            initAnimations();
        }
    }, 50);
}

function initAnimations() {

    gsap.registerPlugin(ScrollTrigger);


    /* NAV - Btn tickets e items */

    const btnTickets = document.getElementById("tickets-btn");

    if (btnTickets) {
        gsap.from(btnTickets, {
                x: 200,
                duration: 1,
                 rotate: 360,
                //  ease: "power2.out",
                 scale: 2,
                // ease: "back.out(1.7)",
            });
    }

    gsap.from(".nav-link", {
            y: -100,
            ease: "power3.out",
            duration: 1.5,
            // stagger: 0.25 -> no funciona pero está bueno el efecto
        });

    /* VIVI LA EXPERIENCIA */

    gsap.from(".experiencia-title", {
            scale: 0.8,
            opacity: 0,
            duration: 1.2,
            ease: "power3.out",
            immediateRender: false,
            scrollTrigger: {
                trigger: ".experiencia-title",
                start: "top 80%",
                toggleActions: "play none none none",
            }

        });

    gsap.from("#line-up", {
            x: -500,
            ease: "power3.out",
            duration: 1.5,
            scrollTrigger: {
                trigger: "#line-up",
                start: "top 80%",
            }
        });


    /* TICKETS - cards */


    gsap.from(".card-presencial", {
        x: -200,
         opacity: 0,
        duration: 1,
        ease: "bounce.out",
        scrollTrigger: {
                trigger: ".card-presencial",
                start: "top 60%"
            }
    });
    gsap.from(".card-online", {
        x: 200,
         opacity: 0,
        duration: 1,
        ease: "bounce.out",
        scrollTrigger: {
                trigger: ".card-online",
                start: "top 60%"
            }
    });
     gsap.from(".card-contacto", {
        y: 200,
        opacity: 0,
        duration: 1,
        ease: "bounce.out",
        scrollTrigger: {
                trigger: ".card-contacto",
                start: "top 80%"
            }
    });


};
