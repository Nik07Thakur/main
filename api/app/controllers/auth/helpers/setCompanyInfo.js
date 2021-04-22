/**
 * Creates an object with company info
 * @param {Object} req - request object
 */
 const setCompanyInfo = (req = {}) => {
    return new Promise((resolve) => {
      let company = {
        _id: req._id,
        name: req.name,
        userId: req.userId,
        country: req.country,
        streetAddress: req.streetAddress,
        mainBusinessActivities: req.mainBusinessActivities,
        shareHolders: req.shareHolders,
        percentages: req.percentages
      }
      // Adds verification for testing purposes
      // if (process.env.NODE_ENV !== 'production') {
      //   company = {
      //     ...company,
      //     verification: req.verification
      //   }
      // }
      resolve(company)
    })
  }
  
  module.exports = { setCompanyInfo }
  