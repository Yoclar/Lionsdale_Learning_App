document.addEventListener('DOMContentLoaded', function() {
    console.log('Document is ready!');
    var modalTriggerButtons = document.querySelectorAll('[data-toggle="modal"]');
    console.log('Found modal trigger buttons:', modalTriggerButtons);


    modalTriggerButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            console.log('Modal button clicked!');
            var name = button.getAttribute('data-name');
            var level = button.getAttribute('data-level');

            var courseNameElement = document.getElementById('courseName');
            var courseLevelElement = document.getElementById('courseLevel');

            // Update the modal content with the course details
            courseNameElement.textContent = 'Course Name: ' + name;
            courseLevelElement.textContent = 'Course Level: ' + level;

            // Show the modal
            var modal = new bootstrap.Modal(document.getElementById('courseDetailsModal'));
            modal.show();
            console.log('Modal shown!');
        });
    });
});