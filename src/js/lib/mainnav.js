export function init() {
    const nav = document.querySelector("#mainnav");
    const button = nav.querySelector("#hamburger");

    button.addEventListener("click", e => {
        console.log(button.classList)
        if(button.classList.contains('closed')) {
            button.classList.add('open');
            button.classList.remove('closed');
        } else {
            button.classList.add('closed');
            button.classList.remove('open');
        }
    });

    const link = nav.querySelectorAll("a");
    
    for(var i = 0; i < link.length; i++) {
        link[i].addEventListener("click" , e => {
            console.log(button.classList)
            button.classList.add('closed');
            button.classList.remove('open');
        })
    }
}