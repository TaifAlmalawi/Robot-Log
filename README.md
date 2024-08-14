# Robot-Log
A simple web application that displays the last recorded movement command sent to a robot, stored in a MySQL database.

- Connecting to the Database: A connection to the database is established using your connection credentials.
  
- Querying: The most recent value stored in the `movements` table is retrieved using an SQL query that orders the results by `id` in descending order and limits the result to the first one (`LIMIT 1`).
  
- Displaying the Result: If a result is found, the most recent stored value (e.g., "Backward") is displayed. If no data is available, a message indicating that there are no commands is displayed.

<div>
 <img src="https://github.com/user-attachments/assets/9d892f93-427b-42fb-ba2b-287ad1f97cb5" width=500">
 <img src="https://github.com/user-attachments/assets/f576119e-4d37-4f61-b2a6-2fcb54ceec79" width=600">
</div>
