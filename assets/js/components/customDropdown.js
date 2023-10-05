let dropDownOpened = false;

document.addEventListener('DOMContentLoaded', () => {
    enableDropDowns();
});

const enableDropDowns = () => {
    const customDropdownElements = document.querySelectorAll('.jsCustomDropdownBtn');

    // For each element with the "customDropdown" class
    customDropdownElements.forEach((elem) => {
        // We set an event that opens the closest dropdown of the current element
        elem.addEventListener('click', () => {
            const dropDownList = elem.closest('div').querySelector('.jsCustomDropdownList');
            resetDropdowns();
            dropDownList.classList.remove('hideElement');
        });
    });
};

// We set an event that opens the closest dropdown of the current element
document.addEventListener("click", function(event) {
    // Check if the clicked element is not the dropdown list nor the dropdown button
    if (!event.target.classList.contains("jsCustomDropdownList") && !event.target.classList.contains("jsCustomDropdownBtn")) {
      // If the clicked element is not the dropdown list nor the dropdown button, look for all the dropdown lists and hide them
      resetDropdowns();
    }
  });

/**
 * Hide all the custom dropDowns on the page
 */
function resetDropdowns() {
    var dropdowns = document.querySelectorAll(".jsCustomDropdownList");
    dropdowns.forEach((dropdown) => {
      if (!dropdown.classList.contains("hideElement")) {
        dropdown.classList.add("hideElement");
      }
    });
}