import toast from "./toast.js"
// toast attribute text("Lorem ipsum"), status(success, error, alert), autoclose(1000ms, true, false), closeOnclick(true, false)
if(sessionStorage.getItem('notification'))
{
    let notif = JSON.parse(sessionStorage.getItem('notification'))
    new toast({text: notif[0], status: notif[1]})
    sessionStorage.removeItem('notification')
}