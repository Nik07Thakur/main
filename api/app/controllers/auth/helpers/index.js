const { blockIsExpired } = require('./blockIsExpired')
const { blockUser } = require('./blockUser')
const {
  checkLoginAttemptsAndBlockExpires
} = require('./checkLoginAttemptsAndBlockExpires')
const { checkPermissions } = require('./checkPermissions')
const { findForgotPassword } = require('./findForgotPassword')
const { companySave } = require('./companySave')
const { findUser } = require('./findUser')
const { findUserById } = require('./findUserById')
const { findUserToResetPassword } = require('./findUserToResetPassword')
const { forgotPasswordResponse } = require('./forgotPasswordResponse')
const { generateToken } = require('./generateToken')
const { getUserIdFromToken } = require('./getUserIdFromToken')
const { markResetPasswordAsUsed } = require('./markResetPasswordAsUsed')
const { passwordsDoNotMatch } = require('./passwordsDoNotMatch')
const { registerUser } = require('./registerUser')
const { returnCompanyToken } = require('./returnCompanyToken')
const { returnRegisterToken } = require('./returnRegisterToken')
const { saveForgotPassword } = require('./saveForgotPassword')
const { saveLoginAttemptsToDB } = require('./saveLoginAttemptsToDB')
const {
  saveUserAccessAndReturnToken
} = require('./saveUserAccessAndReturnToken')
const { setUserInfo } = require('./setUserInfo')
const { setCompanyInfo } = require('./setCompanyInfo')
const { updatePassword } = require('./updatePassword')
const { userIsBlocked } = require('./userIsBlocked')
const { verificationExists } = require('./verificationExists')
const { verifyUser } = require('./verifyUser')

module.exports = {
  blockIsExpired,
  blockUser,
  checkLoginAttemptsAndBlockExpires,
  companySave,
  checkPermissions,
  findForgotPassword,
  findUser,
  findUserById,
  findUserToResetPassword,
  forgotPasswordResponse,
  generateToken,
  getUserIdFromToken,
  markResetPasswordAsUsed,
  passwordsDoNotMatch,
  registerUser,
  returnCompanyToken,
  returnRegisterToken,
  saveForgotPassword,
  saveLoginAttemptsToDB,
  saveUserAccessAndReturnToken,
  setUserInfo,
  setCompanyInfo,
  updatePassword,
  userIsBlocked,
  verificationExists,
  verifyUser
}
