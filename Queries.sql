#Query to display an article (id = 10) and its author

select * from articles
join users on articles.id_user = users.id
where articles.id = 10;
