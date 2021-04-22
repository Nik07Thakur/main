/**
 * Creates an object with user info
 * @param {Object} req - request object
 */
const setUserInfo = (req = {}) => {
  return new Promise((resolve) => {
    let user = {
      _id: req._id,
      firstname: req.firstname,
      lastname: req.lastname,
      email: req.email,
      dob: req.dob,
      placeofbirth: req.placeofbirth,
      citizenship: req.citizenship,
      address: req.address,
      image: req.image,
      role: req.role,
      phone: req.phone,
      verified: req.verified,
      verified: req.verified
    }
    // Adds verification for testing purposes
    if (process.env.NODE_ENV !== 'production') {
      user = {
        ...user,
        verification: req.verification
      }
    }
    resolve(user)
  })
}

module.exports = { setUserInfo }
