DROP DATABASE IF EXISTS fortune_db;

CREATE DATABASE fortune_db;

USE fortune_db;
DROP TABLE IF EXISTS fortune_messege;

CREATE TABLE fortune_message (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    message VARCHAR(255) NOT NULL
);

INSERT INTO fortune_message (message) VALUES
("Today it's up to you to create the peacefulness you long for."),
("A friend asks only for your time not your money."),
("If you refuse to accept anything but the best, you very often get it."),
("A smile is your passport into the realm of possibility."),
("Your high-minded principles spell success."),
("Change can hurt, but it leads a path to something better."),
("Today is the most important day in your life."),
("You can always find happiness at work on Friday after you finish Saturday."),
("Your life does not get better by chance. It gets better by change."),
("You can't love life until you live the life you love."),
("Your hard work will soon make you happy."),
("You can't go wrong with a smile."),
("You'll make life a lot easier if you dress like a pirate."),
("Enjoy the good luck a companion brings you."),
("People are naturally attracted to you."),
("Hidden in a valley beside an open stream- This will be the type of place where you will find your dream."),
("A chance meeting opens new doors to success and friendship."),
("You learn from your mistakes... You will learn a lot today."),
("If you have something good in your life, don't let it go!"),
("What ever you're goal is in life, embrace it visualize it, and for it will be yours."),
("Your shoes will make you happy today."),
("You cannot love life until you live the life you love."),
("Be on the lookout for coming events; They cast their shadows beforehand."),
("Land is always on the mind of a flying bird."),
("The man or woman you desire feels the same about you."),
("A dream you have will come true."),
("Our deeds determine us, as much as we determine our deeds.");