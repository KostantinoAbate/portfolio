jQuery(function () {
    let $btn = $("[open-menu]");
    let $openIcon = $("#menu-icon-open");
    let $closeIcon = $("#menu-icon-close");
    let $menu = $("#menu-body");

    // 1) Apertura/chiusura menu
    $btn.on("click", function () {
        if ($menu.hasClass("translate-x-[120%]")) {
            $menu.removeClass("translate-x-[120%]");
            $openIcon.addClass("hidden");
            $closeIcon.removeClass("hidden");
        } else {
            $menu.addClass("translate-x-[120%]");
            $openIcon.removeClass("hidden");
            $closeIcon.addClass("hidden");
        }
    });

    // 2) Raccogli link e sezioni
    const $links = $("#menu-body a");
    const sections = $links.map(function () {
        return $($(this).attr("href"));
    });

    // 3) Scrollspy semplificato
    $(window).on("scroll", function () {
        const scrollPos = $(this).scrollTop();
        let currentId = sections
            .map(function () {
                const $sec = $(this);
                if (!$sec.length) return null;
                const top = $sec.offset().top;
                // se la sezione è già passata in alto (o toccata)
                return top <= scrollPos ? $sec.attr("id") : null;
            })
            .get() // estrae l'array
            .filter(Boolean) // rimuove i null
            .pop(); // prende l’ultima, cioè la più in basso

        // se nessuna sezione è stata ancora superata, evidenzio la prima
        if (!currentId && sections.first().length) {
            currentId = sections.first().attr("id");
        }

        // 4) Applico le classi
        $links
            .removeClass("text-secondary/70 hover:text-secondary")
            .addClass("text-base-content/70 hover:text-base-content")
            .filter(`[href="#${currentId}"]`)
            .removeClass("text-base-content/70 hover:text-base-content")
            .addClass("text-secondary/70 hover:text-secondary");
    });

    // trigger iniziale per settare subito il link giusto
    $(window).trigger("scroll");
});
