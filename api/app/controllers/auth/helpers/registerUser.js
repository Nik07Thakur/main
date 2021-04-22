const uuid = require('uuid')
const User = require('../../../models/user')
const { buildErrObject } = require('../../../middleware/utils')

/**
 * Registers a new user in database
 * @param {Object} req - request object
 */
const registerUser = (req = {}) => {
  return new Promise((resolve, reject) => {
    const user = new User({
      firstname: req.firstname,
      lastname: req.lastname,
      email: req.email,
      dob: req.dob,
      placeofbirth: req.placeofbirth,
      citizenship: req.citizenship,
      address: req.address,
      image: req.image,
      password: req.password,
      role: req.role,
      phone: req.phone,
      verified: req.verified,
      verification: uuid.v4()
    })
    user.save((err, item) => {
      if (err) {
        reject(buildErrObject(422, err.message))
      }
      resolve(item)
    })
  })
}

module.exports = { registerUser }
