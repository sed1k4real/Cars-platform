const DEFAULT_OPTIONS =  {
    autoClose: false,
    closeOnClick: true
}
export default class toast
{
    #toastElement
    #autoCloseTimeout
    constructor(options)
    {
        this.#toastElement = document.createElement("div")
        this.#toastElement.classList.add("toast")
        requestAnimationFrame(() => {
            this.#toastElement.classList.add("show")
        })
        Object.entries({...DEFAULT_OPTIONS, ...options}).forEach(([key, value]) => {
            this[key] = value
        })

        const selector = ".toast__container"
        const container = document.querySelector(selector) || createContainer()
        container.append(this.#toastElement)
        //this.update({...DEFAULT_OPTIONS, ...options})
    }
    /*---------text function---------*/
    set text(value) { this.#toastElement.textContent = value }
    /*---------status function( success, failed, or alert)---------*/
    set status(value)
    {
        if(value == null ) return
        this.#toastElement.classList.add(value)
    }
    /*---------auto close function---------*/
    set autoClose(value)
    {
        if(value == false) return

        if(this.#autoCloseTimeout != null) clearTimeout(this.#autoCloseTimeout)
        this.#autoCloseTimeout = setTimeout(()=> {this.remove()}, value)
    }
    /*---------CloseOnClick function---------*/
    //this function contains errors 
    set closeOnClick(value)
    {
        console.log(value)
        if(value){ this.#toastElement.addEventListener("click", () => {this.remove()}) }
        else { this.#toastElement.removerEventListener("click", () => {this.remove()}) }
    }
    /*---------update function---------*/
    //update(options){Object.entries({...options}).forEach(([key, value]) => {this[key] = value})}
    /*---------remove function---------*/
    remove()
    {
        const container = this.#toastElement.parentElement
        this.#toastElement.classList.remove("show")
        this.#toastElement.addEventListener("transitionend", () => {
            this.#toastElement.remove()
        })
        if(container.hasChildNodes()) return
        container.remove()
    }
}

//createContainer function works perfectly 
function createContainer()
{
    console.log("here")
    const container = document.createElement("div")
    container.classList.add("toast__container")

    document.body.append(container)
    return container
}