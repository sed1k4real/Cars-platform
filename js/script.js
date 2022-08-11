import toast from "./toast.js"
// toast attribute text("Lorem ipsum"), status(success, failed, alert), autoclose(1000ms, true, false), closeOnclick(true, false)
if(sessionStorage.getItem('notification'))
{
    let notif = sessionStorage.getItem('notification');
    let notify = Function(notif)
    notif = sessionStorage.removeItem('notification')
}