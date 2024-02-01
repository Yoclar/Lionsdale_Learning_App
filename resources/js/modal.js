
document.addEventListener('DOMContentLoaded', function() {

    var modalTriggerButtons = document.querySelectorAll('[data-toggle="modal"]');
   


    modalTriggerButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var name = button.getAttribute('data-name');
            var level = button.getAttribute('data-level');
            var description = button.getAttribute('data-description');
            var price = button.getAttribute('data-price');
            
            var courseId = button.getAttribute('data-course-id'); // Add this line to get the course ID

            var courseNameElement = document.getElementById('courseName');
            var courseLevelElement = document.getElementById('courseLevel');

            // Update the modal content with the course details
            courseNameElement.textContent = 'Course Name: ' + name;
            courseLevelElement.textContent = 'Course Level: ' + level;

            // Show the modal
            var modal = $('#courseDetailsModal');
            modal.modal('toggle');
        });
    });


     // Additional code to handle modal close events
     $('#courseDetailsModal').on('hidden.bs.modal', function () {
       
        // Additional code to run when the modal is closed
    });
    $(document).ready(function() {
        $('#courseDetailsModal').on('show.bs.modal', function (event) {
        });
     });
});