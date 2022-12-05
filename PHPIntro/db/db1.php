
Sukurti table'us

user
id - int 11 autoincrement, primary key, not null
name - varchar 100 not null
email - varchar 255 not null
created_at datetime not null (add date -now- on insert)
updated_at datetime null (change date on update)

indexai - id

categories
id int 11 autoincrement, primary key, not null
title varchar 50 not null
created_at datetime not null (add date -now- on insert)
updated_at datetime null (change date on update)
indexai - id

movies
id int 11 autoincrement, primary key, not null
category_id int 11 null
title varchar 255 not null
description text null
created_at datetime not null (add date -now- on insert)
updated_at datetime null (change date on update)

indexai - id, categories_id, created_at


rented_movies
id  int 11 autoincrement, primary key, not null
user_id int 11 not null
movie_id int 11 not null
deadline_at datetime not null
created_at datetime not null (add date -now- on insert)
updated_at datetime null (change date on update)


