-- database: Users.db
CREATE TABLE Users (
    UserID INTEGER,
    UserName STRING,
    UserEmail STRING,
    UserTel INTEGER,
    PRIMARY KEY(UserID)
);

CREATE TABLE Bookings (
    UserID INTEGER,
    BookingDate Date,
    BookingTime Time,
    BookingType STRING,
    FOREIGN KEY(UserID) REFERENCES Users(UserID)
);