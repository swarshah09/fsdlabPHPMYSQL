const citiesByState = {
    "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad", "Solapur", "Amravati", "Kolhapur", "Sangli", "Satara"],
    "Karnataka": ["Bangalore", "Mysore", "Hubli", "Belgaum", "Mangalore", "Gulbarga", "Davanagere", "Shimoga", "Bellary", "Tumkur"],
    "Gujarat": ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar", "Jamnagar", "Junagadh", "Gandhinagar", "Anand", "Bharuch"]
};

document.addEventListener("DOMContentLoaded", function () {
    const stateSelect = document.getElementById("state");
    const citySelect = document.getElementById("city");
    const form = document.getElementById("myForm");

    stateSelect.addEventListener("change", function () {
        const selectedState = stateSelect.value;
        const cities = citiesByState[selectedState] || [];
        
        // Clear the city dropdown
        citySelect.innerHTML = '';

        if (cities.length === 0) {
            const option = document.createElement("option");
            option.value = "";
            option.text = "No cities available";
            citySelect.appendChild(option);
        } else {
            const defaultOption = document.createElement("option");
            defaultOption.value = "";
            defaultOption.text = "Select City";
            citySelect.appendChild(defaultOption);

            cities.forEach(function (city) {
                const option = document.createElement("option");
                option.value = city;
                option.text = city;
                citySelect.appendChild(option);
            });
        }
    });

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        validateForm();
    });

    function validateForm() {
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const email = document.getElementById('email').value;
        const state = document.getElementById('state').value;
        const city = document.getElementById('city').value;
        const country = document.getElementById('country').value;
        const pincode = document.getElementById('pincode').value;

        if (name && phone && email && state && city && country && pincode) {
            alert('Form submitted successfully!');
            // You can also submit the form data using AJAX here if needed.
        } else {
            alert('Please fill out all fields.');
        }
    }
});
