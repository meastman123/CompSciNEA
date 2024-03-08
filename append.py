from flask import Flask, render_template, url_for, request, redirect
from flask_sqlalchemy import SQLAlchemy
app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///users.db'
db = SQLAlchemy(app)
import logging
logging.basicConfig()
logging.getLogger('sqlalchemy.engine').setLevel(logging.INFO)

class database(db.Model):
		id = db.Column(db.Integer, primary_key=True)
		user = db.Column(db.String(200))
		tel = db.Column(db.String(10))
		email = db.Column(db.String(10))
		Appoinment = db.Column(db.String(10))
		Date = db.Column(db.String(10))
		Time = db.Column(db.String(10))
@app.route('/', methods = ['POST','GET'],)
def signup():
		if request.method == 'GET':
				return render_template('bookings.html')
		elif request.method == 'POST':
				name = request.form['name']
				print("The name is '" + name + "'")
				tel = request.form['tel']
				print("The Start date is '" + tel + "'")
				email = request.form['email']
				print("The end date is '" + email + "'")
				Appointment = request.form['Appointment']
				print("The end date is '" + Appointment + "'")
				Date = request.form['Date']
				print("The end date is '" + Date + "'")
				Time = request.form['Time']
				print("The end date is '" + Time + "'")

				dbname = database(user=name)
				dbtel = database(tel=tel)
				dbemail = database(email=email)
				dbAppointment = database(Appointment=Appointment)
				dbDate = database(Date=Date)
				dbTime = database(Time=Time)
				try:
						db.session.add(dbname)
						db.session.add(dbtel)
						db.session.add(dbemail)
						db.session.add(dbAppointment)
						db.session.add(dbDate)
						db.session.add(dbTime)
						db.session.commit()
						return redirect('/')
				except:
						return 'There was an issue adding your task'
				return redirect('/')
if __name__ == '__append__':
		app.run(debug=True)