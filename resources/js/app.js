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
            minTime: "08:00",
            maxTime: "18:00",
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            disable: bookedDates,
        });
    } catch (error) {
        console.error("Error fetching booked dates:", error);
    }
});