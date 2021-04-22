const mongoose = require('mongoose')
const bcrypt = require('bcrypt')
const md5 = require('md5')
const validator = require('validator')
const mongoosePaginate = require('mongoose-paginate-v2')

const UserSchema = new mongoose.Schema( 
  {
    firstname: { 
      type: String,
      required: true
    },
    lastname: { 
      type: String,
      required: true
    },
    email: {
      type: String,
      validate: {
        validator: validator.isEmail,
        message: 'EMAIL_IS_NOT_VALID'
      },
      lowercase: true,
      unique: true,
      required: true
    },
    dob: {
      type: Date,
      required: true
    },
    placeofbirth: {
      type: String,
      required: true
    },
    citizenship: {
      type: String,
      required: true
    },
    address: {
      type: String,
      required: true
    },
    password: {
      type: String,
      required: true,
      select: false
    },
    image: {
      data: Buffer,
      contentType: String
    },
    role: {
      type: String,
      enum: ['customer', 'admin', 'agent'],
      default: 'customer'
    },
    verification: {
      type: String
    },
    verified: {
      type: Boolean,
      default: false
    },
    phone: {
      type: String
    },
    loginAttempts: {
      type: Number,
      default: 0,
      select: false
    },
    blockExpires: {
      type: Date,
      default: Date.now,
      select: false
    }
  },
  {
    versionKey: false,
    timestamps: true
  }
)

const hash = (user, salt, next) => {
  /* bcrypt.hash(user.password, salt, (error, newHash) => {
    if (error) {
      return next(error)
    }
    user.password = newHash
    return next()
  }) */
  user.password = md5(user.password)
  return next()
}

/* const genSalt = (user, SALT_FACTOR, next) => {
  bcrypt.genSalt(SALT_FACTOR, (err, salt) => {
    if (err) {
      return next(err)
    }
    return hash(user, salt, next)
  })
} */

UserSchema.pre('save', function (next) {
  const that = this
  const SALT_FACTOR = 0
  if (!that.isModified('password')) {
    return next()
  }
  return hash(that, SALT_FACTOR, next)
  //return genSalt(that, SALT_FACTOR, next)
})

UserSchema.methods.comparePassword = function (passwordAttempt) {
  let password = md5(passwordAttempt);
  if(password == this.password) return true;
  return false;
 /* bcrypt.compare(passwordAttempt, this.password, (err, isMatch) =>
    err ? cb(err) : cb(null, isMatch)
  )*/
}
UserSchema.plugin(mongoosePaginate)
module.exports = mongoose.model('User', UserSchema)
