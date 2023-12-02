(function(){
    var dateMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var dateWeekDays = ["Wednesday", "Thursday", "Friday", "Saturday", "Sunday", "Monday", "Tuesday"];
    var dateNow = new Date();

    var dateNowYear = dateNow.getFullYear();

    var dateNowMonthNumber = dateNow.getMonth();
    var dateNowMonthName = dateMonths[dateNowMonthNumber];
    var dateNowDayNumber = dateNow.getDay();
    var dateNowDay = dateWeekDays[dateNowDayNumber];
    var dateNowDate = dateNow.getDate();

    var elDateToday = document.getElementById("date");
    elDateToday.textContent = dateNowDay + ", " + dateNowMonthName + " " + dateNowDate + ", " + dateNowYear;
    } ());
    