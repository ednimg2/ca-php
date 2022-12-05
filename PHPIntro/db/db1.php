
Sukurti table'us

user
id - int 11 autoincrement not null
name - varchar 100 not null
email - varchar 255 not null
created_at datetime not null (add date -now- on insert)
updated_at datetime null (change date on update)

indexai - id

categories
id int 11 autoincrement not null
title varchar 50 not null
created_at datetime not null (add date -now- on insert)
updated_at datetime null (change date on update)

todo
id int 11 autoincrement not null
user_id int 11 not null
category_id int 11 null
title varchar 255 not null
description text null
deadline_at date not null
created_at datetime not null (add date -now- on insert)
updated_at datetime null (change date on update)

indexai - id, user_id, deadline_at, created_at

Sukurti insertus lentai user:

User1, user1@localhost.lc
User2, user1@localhost.lc
User3, user1@localhost.lc

Sukurti insertus lentai categories

Namu darbai,
Sportas,
Skaitymas,
Pomegiai,
Maisto gaminimas


Sukurti insertus lentai todo

user1_id, categories1_id, Atlikti PHP namu darbus, trumpas descriptionas, 2022-12-06 17:00:00
user1_id, categories2_id, Nubegti 5km, null, 2022-12-09 21:00:00
user2_id, categories4_id, Numegzti kepure, Spalvos turi buti geltona, zalia, raudona, 2022-12-12 13:00:00
user3_id, categories5_id, Iskepti lazanija, null, 2022-12-09 21:00:00
user3_id, categories3_id, Perskaityti knyga apie PHP, null, 2022-12-22 23:59:59

