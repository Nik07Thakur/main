const { buildErrObject } = require('../../middleware/utils')

/**
 * Checks is password matches
 * @param {string} password - password
 * @param {Object} user - user object
 * @returns {boolean}
 */
const checkPassword = (password = '', user = {}) => {
  return new Promise((resolve, reject) => {
    if(user.comparePassword(password)){
      resolve(true)
    }else{
      resolve(false)
    }
    
  })
}

module.exports = { checkPassword }
