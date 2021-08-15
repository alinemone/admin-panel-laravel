/**
 * open sidebar
 */

let bars = document.querySelectorAll('.bars');
let sideBarNav = document.querySelector('.sidebar__nav');
let content = document.querySelector('.content');
bars.forEach((e) => {
    e.addEventListener("click", function () {
        sideBarNav.classList.toggle("is-active");
        content.classList.toggle("is-active");
    })
})

/**
 * Tooltip
 */

let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

/**
 * Sub menu
 */
const subMenuItem = document.querySelectorAll("ul li.has-sub-ui");

subMenuItem.forEach((el) =>
    el.addEventListener("click", () => {
        var vh = el.children[1].scrollHeight;
        if (el.classList.contains("open")) {
            el.classList.remove("open");
            // el.children[1].classList.remove('open');
            el.children[1].style.height = 0;

        } else {
            subMenuItem.forEach((el2) => (el2.children[1].style.height = 0, el2.classList.remove("open")));
            el.classList.add("open");
            // el.children[1].classList.add('open');
            el.children[1].style.height = vh + "px";
        }
    })
);


/**
 * open setting navbar
 */

$("#js-setting-ui").on("click", function () {
    $(".theme-setting__nav").toggleClass("open")
})

/**
 * close setting navbar
 */
$(document).on("click", function (s) {
    $(s.target).closest("#js-setting-ui").length || $(s.target).closest(".theme-setting__nav").length || (
        $(".theme-setting__nav").removeClass("open"),
            $("body").removeClass("overflow-hidden"));
})

/**
 dark mode
 **/

$(".setting_switch .lv-btn").on("change", function () {
    this.checked ? $("body").addClass("dark-theme") : $("body").removeClass("dark-theme")
})

$('#flexSwitchCheckDefault').change(function (event) {
    if (event.target.checked) {
        localStorage.setItem('isDarkMode', true);
    } else {
        localStorage.setItem('isDarkMode', false);
    }
})
function dark_mode() {

    if (localStorage.getItem('isDarkMode') === 'true') {
        document.body.classList.add("dark-theme")
        document.getElementById('flexSwitchCheckDefault').checked = true
    } else {
        document.body.classList.remove("dark-theme")
        document.getElementById('flexSwitchCheckDefault').checked = false
    }
}
window.onload = dark_mode();
//End dark mode
