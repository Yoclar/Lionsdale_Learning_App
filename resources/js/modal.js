document.addEventListener('DOMContentLoaded', function() {

    var modalTriggerButtons = document.querySelectorAll('[data-toggle="modal"]');
   
    modalTriggerButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var name = button.getAttribute('data-name');
            var level = button.getAttribute('data-level');
            var description = button.getAttribute('data-description');
            var price = button.getAttribute('data-price');
            
            var courseId = button.getAttribute('data-course-id'); // Add this line to get the course ID
            console.log('Course ID:', courseId);

            var courseNameElement = document.getElementById('courseName-' + courseId);
            var courseLevelElement = document.getElementById('courseLevel-' + courseId);
            var courseDescriptionElement = document.getElementById('courseDescription-' + courseId);
            var coursePriceElement = document.getElementById('coursePrice-' + courseId);

            console.log('courseNameElement:', courseNameElement);
            console.log('courseLevelElement:', courseLevelElement);

            // Update the modal content with the course details
            courseNameElement.textContent = 'Course Name: ' + name;
            courseLevelElement.textContent = 'Course Level: ' + level;
            courseDescriptionElement.textContent = 'Description: ' + description;
            coursePriceElement.textContent = 'Price: ' + price + ' $';

            // Show the modal corresponding to the clicked button
            var modal = $('#courseDetailsModal-' + courseId);
            modal.modal('toggle');
        });
    });

    // Additional code to handle modal close events
    $('[id^="courseDetailsModal-"]').on('hidden.bs.modal', function () {
        // Additional code to run when the modal is closed
    });
});