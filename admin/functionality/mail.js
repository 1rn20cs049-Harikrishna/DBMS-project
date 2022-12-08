let nodemailer = require('nodemailer');

let transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'harikrishna92364@gmail.com',
    pass: 'ykvoyjhsknangbjy'
    // ; ykvoyjhsknangbjy'
  }
});

let mailOptions = {
  from: 'harikrishna@gmail.com',
  to: '1rn20cs049.harikrishna@gmail.com',
  subject: 'Sending Email using Node.js',
  text: 'hiii',
  html: '<h1>Welcome</h1><p>That was easy!</p>'
};

transporter.sendMail(mailOptions, function(error, info){
  if (error) {
    console.log(error);
  } else {
    console.log('Email sent: ' + info.response);
  }
});