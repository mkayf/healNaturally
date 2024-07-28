// JavaScript code using GSAP

        // use a script tag or an external JS file
        document.addEventListener("DOMContentLoaded", (event) => {


            var tl = gsap.timeline()
            // gsap code here!
            tl.to("#mysidebar", {

                right: "-0%",
                duration: 1,
                ease: "power2.out"

            })

            tl.from("#A-container a", {

                x: 180,
                duration: 0.6,
                stagger: 0.25,
                ease: "back.out"


            })
            tl.from("#cut", {
 
                rotate: "360deg",
                duration: 0.8,
                ease: "back.out"
                

            })

            tl.pause();

            var playbtn =  document.querySelector("#Menu-btn")
            var pausebtn =  document.querySelector("#cross-btn")
            var shakebtn =  document.querySelector("#shake")
          
            playbtn.addEventListener("click", () => {
                tl.play();
              });

              pausebtn.addEventListener("click", () => {
                tl.reverse();
              });

              
              let animationRunning = false;

shakebtn.addEventListener("click", () => {
  if (!animationRunning) {
    animationRunning = true;
    gsap.killTweensOf("#shakesrch");
    gsap.killTweensOf("#shake_icon");
    gsap.from("#shakesrch", {
      x: 50,
      x: -50,
      duration: 1,
      ease: "elastic.out",
      onComplete: () => {
        animationRunning = false;
      }
    });
    gsap.from("#shake_icon", {
      scale: "0.8",
      duration: 2,
      ease: "back.out",
      onComplete: () => {
        animationRunning = false;
      }
    });
  }
});


        });

        
