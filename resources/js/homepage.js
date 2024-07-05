import Typed from 'typed.js';

document.addEventListener("DOMContentLoaded", function () {
    // Funzione per generare ritardi casuali
    function randomDelay(base, variance) {
        return Math.floor(Math.random() * variance) + base;
    }

    // Mostra la prima scritta e aspetta 3 secondi
    setTimeout(function () {
        var options = {
            strings: [
                "Gando",
                "Claude",
                "Clod",
                "Clœd",
                "Clöd",
                "Cloddo",
                "Cloddoman",
                "CL",
                "Super",
                "S.",
                "Super Clod",
                "Suuupah",
                "KRAUT",
                "Ganz",
                "Ganzerker",
                "Callum",
                "Mullac",
                "CLOOOOOOOOD",
                "Gando McCallum",
                "Claudio Gandini",
            ],
            typeSpeed: 70,
            backSpeed: 50,
            backDelay: 2000,
            loop: true,
            preStringTyped: function (arrayPos, self) {
                // Modifica i tempi di digitazione e cancellazione per renderli più casuali
                self.typeSpeed = randomDelay(40, 70);
                self.backSpeed = randomDelay(25, 50);
            },
            onStringTyped: function (arrayPos, self) {
                // Modifica i tempi di backDelay per renderli più casuali
                self.backDelay = randomDelay(1500, 2500);
            }
        };

        var typed = new Typed("#typed-output", options);
    }, 2500); // Attendi 2.5 secondi prima di avviare Typed.js
});
