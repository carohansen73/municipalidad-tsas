document.addEventListener("DOMContentLoaded", () => {

    /* HERO - Barra con la fecha */

    // gsap.registerPlugin(ScrollTrigger);

    // gsap.to(".marquee-track", {
    //     xPercent: -50,
    //     ease: "none",
    //     scrollTrigger: {
    //         trigger: ".marquee-section",
    //         start: "top bottom",
    //         end: "bottom top",
    //         scrub: true
    //     }
    // });

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

    gsap.from(".bg-brushstroke", {
            scale: 3,
            opacity: 0,
            ease: "power3.out",
            duration: 2.5,
            scrollTrigger: {
                trigger: ".bg-brushstroke",
                start: 200,
            }

        });


    gsap.from("#line-up", {
            x: -500,
            ease: "power3.out",
            duration: 1.5,
            scrollTrigger: {
                trigger: "#line-up",
                start: 400,
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
                start: "top 60%"
            }
    });




});
