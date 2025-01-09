// Sample data for available cabs, including prices
const cabs = [
    { type: 'Auto', image: 'cab1.jpg', price: '₹2500' },
    { type: 'Sedan', image: 'download.jpeg', price: '₹2500' },  // Price updated to ₹500
    { type: 'Auto', image: 'cab3.webp', price: '₹2500' },  // Price updated to ₹500
    { type: 'Scorpio', image: 'cab4.jpg', price: '₹2500' },  // Price updated to ₹500
];

// Function to display cabs
function displayCabs(filteredCabs) {
    const cabList = document.getElementById('cabList');
    cabList.innerHTML = ''; // Clear previous content
    filteredCabs.forEach(cab => {
        const cabItem = document.createElement('div');
        cabItem.className = 'cab-item';
        cabItem.innerHTML = `
            <img src="${cab.image}" alt="${cab.type}">
            <div class="cab-title">${cab.type}</div>
            <div class="cab-price">${cab.price}</div>
            <!-- Convert "Book Now" button to a link -->
            <a href="http://localhost/classroom1/classroom3/CabRide.php" class="book-link">Book Now</a>
        `;
        cabList.appendChild(cabItem);
    });
}

// Display all cabs initially
displayCabs(cabs);

// Filter cabs based on search input
function filterCabs() {
    const query = document.getElementById('search').value.toLowerCase();
    const filteredCabs = cabs.filter(cab => cab.type.toLowerCase().includes(query));
    displayCabs(filteredCabs);
}

// Book cab function
function bookCab(type) {
    alert(`You have selected a ${type}. Proceeding to booking!`);
    // Redirect to a booking page or perform booking logic here
}
