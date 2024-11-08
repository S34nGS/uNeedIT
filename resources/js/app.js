import './bootstrap';

import Alpine from 'alpinejs';

import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", async function () {
    try {
        const response = await fetch('/api/booked-dates');
        const bookedDates = await response.json();

        flatpickr("#appointment_date", {
            minDate: "today",
            minTime: "10:00",
            maxTime: "17:00",
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            disable: [
                ...bookedDates,  // Disable booked dates
                function(date) {  // Disable weekends (Saturday and Sunday)
                    return (date.getDay() === 0 || date.getDay() === 6); // Disable Sundays (0) and Saturdays (6)
                }
            ]
        });
    } catch (error) {
        console.error("Error fetching booked dates:", error);
    }
});