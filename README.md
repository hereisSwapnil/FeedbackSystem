# Feedback System   <img src="https://github.com/hereisSwapnil/FeedbackSystem/assets/112846526/a015a6e5-290d-4e11-a28c-3f9b0d59d818" alt="image" width="50"/>



## Overview

The Feedback System project is designed to facilitate the collection and management of feedback within an educational institution. The project has three primary sections: Admin, Teacher, and Student.

## Tech Stack  <img src="https://github.com/hereisSwapnil/FeedbackSystem/assets/112846526/e7da1ab5-4360-46a0-bf45-74aaa349de1a" alt="image" width="50"/>


- **Frontend:** HTML, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Server:** XAMPP

## Sections

### 1. Student Section  <img src="https://github.com/hereisSwapnil/FeedbackSystem/assets/112846526/ba465c73-bd69-4294-b784-bfb507cd9586" alt="image" width="50"/>


Students can:
- Set up and manage their profile.
- Provide feedback on subjects and class outcomes for the teachers who teach them.

### 2. Teacher Section  <img src="https://github.com/hereisSwapnil/FeedbackSystem/assets/112846526/38e82f67-201a-4d03-b4e0-a37cd84b6295" alt="image" width="50"/>


Teachers can:
- Manage their profile.
- View their class allotments.
- Update or add course outcomes.
- Add students to their courses.
- View which students have provided feedback and which have not.
- Sort and print a list of students who have not given feedback.

### 3. Admin Section  <img src="https://github.com/hereisSwapnil/FeedbackSystem/assets/112846526/c693ae2e-9869-4ac8-95dd-fd5e2105ae00" alt="image" width="50"/>


Admins have all the functionalities of teachers plus additional capabilities:
- Add and manage teachers.
- View all feedback given.
- Generate processed reports of the feedback.

## Getting Started<img src="https://github.com/hereisSwapnil/FeedbackSystem/assets/112846526/19c5d9ca-f0cf-41a2-aefd-9fb989c6137b" alt="image" width="50"/>


### Prerequisites

Ensure you have the following installed on your local development environment:
- [XAMPP](https://www.apachefriends.org/index.html)
- MySQL (comes with XAMPP)

### Installation

1. Clone the repository in htdocs:
   ```sh
   git clone <repository_url>
   ```


2. Navigate to the project directory:
   ```sh
   cd feedback-system
    ```

3. Set up the database:
   - Open XAMPP Control Panel and start Apache and MySQL.
   - Open phpMyAdmin by visiting [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
   - Create a database named `feedback_system`.
   - Import the provided SQL file to set up the tables.

### Running the Project <img src="https://github.com/hereisSwapnil/FeedbackSystem/assets/112846526/3b00fcd4-59af-4b3a-bf88-4d1182322eb9" alt="image" width="50"/>


- Start your web server and ensure it's serving the project directory.
- Open your web browser and navigate to [http://localhost/feedback-system](http://localhost/feedback-system) (or the appropriate URL based on your server configuration).

    
