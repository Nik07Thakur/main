const { forgotPassword } = require('./forgotPassword')
const { getRefreshToken } = require('./getRefreshToken')
const { login } = require('./login')
const { register } = require('./register')
const { cSave } = require('./cSave')
const { resetPassword } = require('./resetPassword')
const { roleAuthorization } = require('./roleAuthorization')
const { verify } = require('./verify')

module.exports = {
  forgotPassword,
  getRefreshToken,
  login,
  register,
  cSave,
  resetPassword,
  roleAuthorization,
  verify
}
