create table food(
    id INT not null auto_increment primary key,
    food VARCHAR(25) not null,
    calories INT not null,
    healthy_unhealthy varchar(1) not null
);

/*
    INSERT
*/
INSERT INTO food(id, food, calories, healthy_unhealthy)values(null, "Pizza", "1000", "u");

INSERT INTO food(id, food, calories, healthy_unhealthy)values(null, "Salad", "200", "h");
