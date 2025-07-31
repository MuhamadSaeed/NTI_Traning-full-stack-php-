
SELECT c.title, COUNT(n.std_id) AS total_students
FROM course c
LEFT JOIN enrollments n
ON c.id = n.course_id
GROUP BY c.id;

SELECT s.name, COUNT(r.course_id) AS num_courses
FROM students s
LEFT JOIN registrations r ON s.id = r.student_id
GROUP BY s.id
ORDER BY num_courses ASC
LIMIT 1;



SELECT s.* FROM students s
LEFT JOIN enrollments n
ON s.id = n.std_id
WHERE n.course_id IS NULL;


SELECT s.name, COUNT(e.course_id) AS num_courses
FROM students s
JOIN enrollments e ON
s.id = e.std_id
GROUP BY s.id;
