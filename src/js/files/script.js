// Підключення функціоналу "Чертоги Фрілансера"
import { isMobile, menuClose } from "./functions.js";
// Підключення списку активних модулів
import { flsModules } from "./modules.js";


window.addEventListener('load', pageLoad)

function pageLoad() {

    const htmlTag = document.documentElement

    document.addEventListener('click', event => {
        const targetElement = event.target;


        if (htmlTag.closest('.menu-open') &&  !targetElement.closest('.menu')) {
            menuClose()
        }

    })

}