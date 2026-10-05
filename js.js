    document.addEventListener("DOMContentLoaded", function () {
        const sliderHandle = document.querySelector(".slider-handle");
        const rightImage = document.querySelector(".image-right");
        const sliderContainer = document.querySelector(".about-image-slider");
        let isDragging = false;
    
        // Prevent double-click selection
        sliderContainer.addEventListener("mousedown", (e) => e.preventDefault());
    
        function moveSlider(event) {
            let rect = sliderContainer.getBoundingClientRect();
            let offsetX = (event.touches ? event.touches[0].clientX : event.clientX) - rect.left;
            let percentage = Math.min(Math.max((offsetX / rect.width) * 100, 0), 100);
    
            sliderHandle.style.left = `${percentage}%`;
            rightImage.style.clipPath = `inset(0 0 0 ${percentage}%)`;
        }
    
        function stopDragging() {
            isDragging = false;
            document.removeEventListener("mousemove", moveSlider);
            document.removeEventListener("mouseup", stopDragging);
            document.removeEventListener("touchmove", moveSlider);
            document.removeEventListener("touchend", stopDragging);
        }
    
        sliderHandle.addEventListener("mousedown", () => {
            isDragging = true;
            document.addEventListener("mousemove", moveSlider);
            document.addEventListener("mouseup", stopDragging);
        });
    
        sliderHandle.addEventListener("touchstart", () => {
            isDragging = true;
            document.addEventListener("touchmove", moveSlider);
            document.addEventListener("touchend", stopDragging);
        });
    
        // Set initial slider position to the middle
        function setInitialPosition() {
            let midPoint = 50; // Center at 50%
            sliderHandle.style.left = `${midPoint}%`;
            rightImage.style.clipPath = `inset(0 0 0 ${midPoint}%)`;
        }
    
        setInitialPosition(); // Call on page load
    });
    

    document.addEventListener("DOMContentLoaded", function () {
        let mobileMenuBtn = document.getElementById("mobileMenuBtn");
        let mobileMenu = document.getElementById("mobileMenu");
    
        mobileMenuBtn.addEventListener("click", function () {
            mobileMenu.classList.toggle("active"); // Toggle 'active' class
        });
    
        // Close menu if clicking outside
        document.addEventListener("click", function (event) {
            if (!event.target.closest(".mobile-menu-btn") && !event.target.closest(".mobile-menu")) {
                mobileMenu.classList.remove("active");
            }
        });
    
        // Desktop Products Dropdown Toggle
        document.getElementById("productsBtn").addEventListener("click", function (event) {
            event.stopPropagation(); // Prevents click from closing instantly
            let dropdown = document.getElementById("productsDropdown");
            dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
        });
    
        // Mobile Products Dropdown Toggle
        document.getElementById("mobileProductsBtn").addEventListener("click", function (event) {
            event.stopPropagation();
            let dropdown = document.getElementById("mobileProductsDropdown");
            dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
        });
    
        // Close dropdowns if clicking outside
        document.addEventListener("click", function (event) {
            let productsDropdown = document.getElementById("productsDropdown");
            let mobileProductsDropdown = document.getElementById("mobileProductsDropdown");
    
            if (!event.target.closest("#productsBtn")) {
                productsDropdown.style.display = "none";
            }
    
            if (!event.target.closest("#mobileProductsBtn")) {
                mobileProductsDropdown.style.display = "none";
            }
        });
    });


    const carouselWrapper = document.getElementById("carouselWrapper");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    
    const slides = document.querySelectorAll(".slide");
    const totalSlides = slides.length;
    const slidesVisible = 4;
    let currentIndex = 0;
    let autoSlideInterval;
    
    // Clone first few slides for seamless transition
    for (let i = 0; i < slidesVisible; i++) {
      let clone = slides[i].cloneNode(true);
      carouselWrapper.appendChild(clone);
    }
    
    // Function to update carousel position smoothly
    function updateCarousel(smooth = true) {
      const slideWidth = document.querySelector(".slide").offsetWidth;
      carouselWrapper.style.transition = smooth ? "transform 0.5s ease-in-out" : "none";
      carouselWrapper.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }
    
    // Move forward
    function nextSlide() {
      if (currentIndex >= totalSlides) {
        // Instantly reset position without animation
        carouselWrapper.style.transition = "none";
        currentIndex = 0;
        carouselWrapper.style.transform = `translateX(0px)`;
        requestAnimationFrame(() => {
          setTimeout(() => {
            carouselWrapper.style.transition = "transform 0.5s ease-in-out";
            currentIndex++;
            updateCarousel();
          }, 20);
        });
      } else {
        currentIndex++;
        updateCarousel();
      }
      resetAutoSlide();
    }
    
    // Move backward
    function prevSlide() {
      if (currentIndex <= 0) {
        carouselWrapper.style.transition = "none";
        currentIndex = totalSlides;
        carouselWrapper.style.transform = `translateX(-${currentIndex * document.querySelector(".slide").offsetWidth}px)`;
        requestAnimationFrame(() => {
          setTimeout(() => {
            carouselWrapper.style.transition = "transform 0.5s ease-in-out";
            currentIndex--;
            updateCarousel();
          }, 20);
        });
      } else {
        currentIndex--;
        updateCarousel();
      }
      resetAutoSlide();
    }
    
    nextBtn.addEventListener("click", nextSlide);
    prevBtn.addEventListener("click", prevSlide);
    
    function startAutoSlide() {
      autoSlideInterval = setInterval(nextSlide, 3000);
    }
    
    function resetAutoSlide() {
      clearInterval(autoSlideInterval);
      startAutoSlide();
    }
    
    startAutoSlide();
    
     document.addEventListener("DOMContentLoaded", function () {
            const backgrounds = document.querySelectorAll(".hero-bg");
            const leftBtn = document.querySelector(".left-btn");
            const rightBtn = document.querySelector(".right-btn");
            let currentIndex = 0;
            let autoSlide;
        
            function changeBackground(nextIndex) {
                backgrounds.forEach((bg, index) => {
                    bg.classList.remove("active");
                    if (index === nextIndex) {
                        bg.classList.add("active");
                    }
                });
                currentIndex = nextIndex;
            }
        
            function startAutoSlide() {
                clearInterval(autoSlide); // Reset interval
                autoSlide = setInterval(() => {
                    let nextIndex = (currentIndex + 1) % backgrounds.length;
                    changeBackground(nextIndex);
                }, 3000); // Change every 3 seconds
            }
        
            // Manual Navigation
            leftBtn.addEventListener("click", () => {
                let nextIndex = (currentIndex - 1 + backgrounds.length) % backgrounds.length;
                changeBackground(nextIndex);
                startAutoSlide(); // Restart auto-slide
            });
        
            rightBtn.addEventListener("click", () => {
                let nextIndex = (currentIndex + 1) % backgrounds.length;
                changeBackground(nextIndex);
                startAutoSlide(); // Restart auto-slide
            });
        
            backgrounds[0].classList.add("active");
        
            startAutoSlide();
        });

        
        // product
        function changeImage(element) {
            // Update main image
            document.getElementById("mainImage").src = element.src;
            
            document.querySelectorAll(".thumbnail").forEach(img => img.classList.remove("active"));

            element.classList.add("active");
        }
        

        document.addEventListener("DOMContentLoaded", function () {
            const counters = document.querySelectorAll(".counter");
            const counterSection = document.querySelector(".counter-section");
        
            function startCounting(counter) {
                const target = counter.getAttribute("data-target");
                const digits = target.padStart(target.length, "0").split(""); // Ensure all digits animate
                counter.innerHTML = digits.map(() => `<span>0</span>`).join(""); // Create span for each digit
                const spans = counter.querySelectorAll("span");
        
                spans.forEach((span, index) => {
                    setTimeout(() => {
                        let num = 0;
        
                        function animateDigit() {
                            if (num <= 9) { // Always animates from 0 to 9
                                span.innerText = num;
                                num++;
                                setTimeout(animateDigit, 50);
                            } else {
                                span.innerText = digits[index]; // Set final value
                            }
                        }
                        animateDigit();
                    }, index * 400); // Delay for a cascading effect
                });
            }
        
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            counters.forEach((counter) => startCounting(counter));
                        }
                    });
                },
                { threshold: 0.5 }
            );
        
            observer.observe(counterSection);
        });
                
document.addEventListener("DOMContentLoaded", function () {
    const testimonialWrapper = document.getElementById("carouselWrapperTestimonial");
    const testimonialPrevBtn = document.getElementById("prevBtnTestimonial");
    const testimonialNextBtn = document.getElementById("nextBtnTestimonial");

    if (!testimonialWrapper) return; // Prevent errors if element is missing

    const testimonialSlides = Array.from(document.querySelectorAll(".slide-testimonial"));
    const slidesVisible = 4;
    let currentIndex = slidesVisible;
    let autoSlideInterval;

    // Clone first and last few slides for infinite looping
    testimonialSlides.slice(-slidesVisible).forEach(slide => {
        let clone = slide.cloneNode(true);
        testimonialWrapper.insertBefore(clone, testimonialWrapper.firstChild);
    });

    testimonialSlides.slice(0, slidesVisible).forEach(slide => {
        let clone = slide.cloneNode(true);
        testimonialWrapper.appendChild(clone);
    });

    const updatedSlides = document.querySelectorAll(".slide-testimonial");
    const slideWidth = updatedSlides[0].offsetWidth + 10; // Slide width including margin

    // Set initial position for seamless loop
    testimonialWrapper.style.transition = "none";
    testimonialWrapper.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

    function updateTestimonialCarousel(smooth = true) {
        testimonialWrapper.style.transition = smooth ? "transform 0.5s ease-in-out" : "none";
        testimonialWrapper.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    function nextTestimonialSlide() {
        currentIndex++;
        updateTestimonialCarousel();

        if (currentIndex >= updatedSlides.length - slidesVisible) {
            setTimeout(() => {
                testimonialWrapper.style.transition = "none";
                currentIndex = slidesVisible;
                updateTestimonialCarousel(false);
            }, 500);
        }

        resetTestimonialAutoSlide();
    }

    function prevTestimonialSlide() {
        currentIndex--;
        updateTestimonialCarousel();

        if (currentIndex < slidesVisible) {
            setTimeout(() => {
                testimonialWrapper.style.transition = "none";
                currentIndex = updatedSlides.length - (slidesVisible * 2);
                updateTestimonialCarousel(false);
            }, 500);
        }

        resetTestimonialAutoSlide();
    }

    testimonialNextBtn.addEventListener("click", nextTestimonialSlide);
    testimonialPrevBtn.addEventListener("click", prevTestimonialSlide);

    function startTestimonialAutoSlide() {
        autoSlideInterval = setInterval(nextTestimonialSlide, 3000);
    }

    function resetTestimonialAutoSlide() {
        clearInterval(autoSlideInterval);
        startTestimonialAutoSlide();
    }

    startTestimonialAutoSlide();
});


const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");
const headerMenu = document.getElementById("header");

// Open Close Navbar Menu on Click Burger
if (burgerMenu && navbarMenu) {
   burgerMenu.addEventListener("click", () => {
      burgerMenu.classList.toggle("is-active");
      navbarMenu.classList.toggle("is-active");
   });
}

// Close Navbar Menu on Click Menu Links
document.querySelectorAll(".menu-link").forEach((link) => {
   link.addEventListener("click", () => {
      burgerMenu.classList.remove("is-active");
      navbarMenu.classList.remove("is-active");
   });
});

// Change Header Background on Scrolling
window.addEventListener("scroll", () => {
   if (this.scrollY >= 85) {
      headerMenu.classList.add("on-scroll");
   } else {
      headerMenu.classList.remove("on-scroll");
   }
});

// Fixed Navbar Menu on Window Resize
window.addEventListener("resize", () => {
   if (window.innerWidth > 768) {
      if (navbarMenu.classList.contains("is-active")) {
         navbarMenu.classList.remove("is-active");
      }
   }
});
