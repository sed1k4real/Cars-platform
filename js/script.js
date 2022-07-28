import toast from "./toast.js";

/*const Toast = new toast({text: "Success" ,status: "success"})
const Toast1 = new toast({text: "Alert: missing infos" ,status: "alert"})
const Toast2 = new toast({text: "Error: missing infos" ,status: "failed"})
*/
setTimeout(() => {new toast({text: "Success" ,status: "success",})}, 500)
setTimeout(() => {new toast({text: "Alert: missing infos" ,status: "alert"})}, 1500)
setTimeout(() => {new toast({text: "Error: missing infos" ,status: "failed"})}, 2000)
setTimeout(() => {new toast({text: "🦄 Good to cya again!"})}, 2500)

//const tclick = document.querySelector(".toast")
//tclick.addEventListener("click", closeOnClick(true))