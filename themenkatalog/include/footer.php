<footer>
    <div class="footerTop">
        <a href="../datenschutz.php" class="datenschutz">Datenschutz</a>
        <a href="../impressum.php" class="impressum">Impressum</a>
    </div>
    <div class="footerBottom">
        <div class="copyright">
        </div>
    </div>
</footer>
<script async>

    // Navigationsleiste
    document.addEventListener('DOMContentLoaded', function () {
        const menu = document.querySelector(".menu");
        const menuMain = menu.querySelector(".menuMain");
        const goBack = menu.querySelector(".goBack");
        const menuTrigger = document.querySelector(".mobileMenuTrigger");
        const closeMenu = menu.querySelector(".mobileMenuClose");
        let subMenu;
        menuMain.addEventListener("click", (e) => {
            if (!menu.classList.contains("active")) {
                return;
            }
            if (e.target.closest(".menuItemHasChildren")) {
                const hasChildren = e.target.closest(".menuItemHasChildren");
                showSubMenu(hasChildren);
            }
        });
        goBack.addEventListener("click", () => {
            hideSubMenu();
        });
        menuTrigger.addEventListener("click", () => {
            toggleMenu();
        });
        closeMenu.addEventListener("click", () => {
            toggleMenu();
        });
        document.querySelector(".menuOverlay").addEventListener("click", () => {
            toggleMenu();
        });

        function toggleMenu() {
            menu.classList.toggle("active");
            document.querySelector(".menuOverlay").classList.toggle("active");
        }

        function showSubMenu(hasChildren) {
            subMenu = hasChildren.querySelector(".subMenu");
            subMenu.classList.add("active");
            subMenu.style.animation = "slideLeft 0.5s ease forwards";
            const menuTitle = hasChildren.querySelector("a").childNodes[0].textContent;
            menu.querySelector(".currentMenuTitle").innerHTML = menuTitle;
            menu.querySelector(".mobileMenuHead").classList.add("active");
        }

        function hideSubMenu() {
            subMenu.style.animation = "slideRight 0.5s ease forwards";
            setTimeout(() => {
                subMenu.classList.remove("active");
            }, 300);
            menu.querySelector(".currentMenuTitle").innerHTML = "";
            menu.querySelector(".mobileMenuHead").classList.remove("active");
        }

        window.onresize = function () {
            if (this.innerWidth > 991) {
                if (menu.classList.contains("active")) {
                    toggleMenu();
                }
            }
        }

        // Style anpassung
        const path = window.location.pathname;

        if (path.includes('/Eldenring/')) {
            document.documentElement.classList.add('eldenringTheme');
        } else if (path.includes('/Sekiro/')) {
            document.documentElement.classList.add('sekiroTheme');
        } else if (path.includes('/Fallout4/')) {
            document.documentElement.classList.add('fallout4Theme');
        } else if (path.includes('/Bloodborne/')) {
            document.documentElement.classList.add('bloodborne-theme');
        }

        const svg = document.querySelector('svg#Ebene_1');
        if (svg) {
            const mainColor = getComputedStyle(document.documentElement).getPropertyValue('--mainColor').trim();
            const background = svg.querySelector('#background');
            if (background) {
                background.setAttribute('fill', mainColor);
            }
        }
    });


    //
    // // ---------------
    // // Navbar
    // // ---------------
    // // Initialisiert die Navigation, sobald das DOM vollständig geladen ist
    // document.addEventListener('DOMContentLoaded', function () {
    //     const hamburger = document.querySelector('.hamburger');
    //     const navList = document.querySelector('nav ul');
    //
    //     // Fügt dem Hamburger-Icon einen Click-EventListener hinzu, um die Navigation ein-/auszublenden
    //     hamburger.addEventListener('click', function () {
    //         navList.classList.toggle('open');
    //     });
    // });
    //
    // // ---------------
    // // Hamburger Menu
    // // ---------------
    // // Selektiert das Hamburger-Menü und die Navigationslinks
    // const hamburger = document.querySelector(".hamburger");
    // const navLinks = document.querySelector("nav ul");
    // // Definiert die Funktion zum Umschalten des Hamburger-Menüs
    // function toggleHamburger() {
    //     hamburger.classList.toggle("open");
    //     navLinks.classList.toggle("open");
    //
    //     // Zeigt die Navigationslinks an oder blendet sie aus, je nachdem, ob das Menü geöffnet ist
    //     if (hamburger.classList.contains("open")) {
    //         navLinks.style.display = "flex";
    //     } else {
    //         navLinks.style.display = "none";
    //     }
    // }
    // // Fügt dem Hamburger-Icon einen Click-EventListener hinzu, der die toggleHamburger Funktion auslöst
    // hamburger.addEventListener('click', toggleHamburger);

    // ---------------
    // Floating Nav
    // ---------------
    // Stellt sicher, dass die Floating Navigation erst nach dem Laden des DOMs initialisiert wird
    document.addEventListener("DOMContentLoaded", function () {
        const dots = document.querySelectorAll('.floatingDot');

        // Fügt jedem Dot einen Click-EventListener hinzu, der beim Klicken zu einer Sektion scrollt
        dots.forEach(dot => {
            dot.addEventListener('click', function () {
                const sectionId = this.getAttribute('data-section');
                const section = document.querySelector(sectionId);
                if (section) {
                    const yOffset = -90; // Versatz zum Anpassen der Scroll-Position
                    const y = section.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    window.scrollTo({top: y, behavior: 'smooth'}); // Smooth Scroll zur Sektion
                }
            });
        });
        // Funktion zur Überprüfung, ob ein Element im Viewport sichtbar ist
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
            const isInViewportPartially = rect.top < windowHeight && rect.bottom >= 0;
            return isInViewportPartially;
        }
        // Aktualisiert den aktiven Dot basierend auf der aktuell sichtbaren Sektion
        function updateActiveDot() {
            let maxVisibleHeight = 0;
            let mostVisibleSectionDot = null;

            dots.forEach(dot => {
                const sectionId = dot.getAttribute('data-section');
                const section = document.querySelector(sectionId);
                if (section) {
                    const rect = section.getBoundingClientRect();
                    const visibleHeight = Math.min(rect.bottom, window.innerHeight) - Math.max(rect.top, 0);

                    if (visibleHeight > maxVisibleHeight) {
                        maxVisibleHeight = visibleHeight;
                        mostVisibleSectionDot = dot;
                    }
                }
            });
            dots.forEach(dot => {
                if(dot === mostVisibleSectionDot) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
        // Fügt dem Scroll-Event den updateActiveDot EventListener hinzu
        window.addEventListener('scroll', updateActiveDot);
        // Setzt den initial aktiven Punkt beim Laden der Seite
        updateActiveDot();
    });

    // ---------------
    // MixItUp
    // ---------------
    // Initialisiert das MixItUp Plugin zum Filtern der Projekte in einem Grid
    const mixer = mixitup(".projectGrid");
    // Fügt jedem Projekt-Button einen Click-EventListener hinzu, um den aktiven Zustand zu verwalten
    document.querySelectorAll('.projectBtn').forEach(button => {
        button.addEventListener('click', function () {
            // Entfernt die aktive Klasse von allen Buttons
            document.querySelectorAll('.projectBtn').forEach(btn => {
                btn.classList.remove('mixitubControllActive');
            });
            // Fügt die aktive Klasse dem geklickten Button hinzu
            this.classList.add('mixitubControllActive');
        });
    });

</script>
<!-- Prism.js Library -->
<script src="../prism.js" async></script>

</body>
</html>
