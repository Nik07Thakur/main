const { getUserIdFromToken } = require('./getUserIdFromToken')

/**
 * Builds the registration token
 * @param {Object} userId - user id 
 * @param {Object} item - user object that contains created id
 * @param {Object} companyInfo - company object
 */
const returnCompanyToken = ({userId = ''}, companyInfo = {}) => {
  return new Promise((resolve) => {
    const data = {
      
      // userId: userId,
      // userId: userId,
      company: companyInfo
    }
    // console.log(data)
    resolve(data)
  })
}

module.exports = { returnCompanyToken }
