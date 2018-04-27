<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Curves;

use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Primitives\CurveParameters;
use Mdanter\Ecc\Primitives\GeneratorPoint;
use Mdanter\Ecc\Random\RandomNumberGeneratorInterface;

/**
 * *********************************************************************
 * Copyright (C) 2012 Matyas Danter
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES
 * OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 * ***********************************************************************
 */

/**
 * This class encapsulates the Brainpool curves
 */
class BrainpoolCurve
{
    const NAME_P160R1 = 'brainpoolp160r1';
    const NAME_P192R1 = 'brainpoolp192r1';
    const NAME_P224R1 = 'brainpoolp224r1';
    const NAME_P256R1 = 'brainpoolp256r1';
    const NAME_P330R1 = 'brainpoolp330r1';
    const NAME_P384R1 = 'brainpoolp384r1';
    const NAME_P512R1 = 'brainpoolp512r1';

    /**
     * @var GmpMathInterface
     */
    private $adapter;

    /**
     * @param GmpMathInterface $adapter
     */
    public function __construct(GmpMathInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * Returns a Brainpool P160 curve.
     *
     * @return NamedCurveFp
     */
    public function curve160r1(): NamedCurveFp
    {
        $p = gmp_init('E95E4A5F737059DC60DFC7AD95B3D8139515620F', 16);
        $a = gmp_init('340E7BE2A280EB74E2BE61BADA745D97E8F7C300', 16);
        $b = gmp_init('1E589A8595423412134FAA2DBDEC95C8D8675E58', 16);

        $parameters = new CurveParameters(160, $p, $a, $b);

        return new NamedCurveFp(self::NAME_P160R1, $parameters, $this->adapter);
    }

    /**
     * Returns a Brainpool P160 generator.
     *
     * @param  RandomNumberGeneratorInterface $randomGenerator
     * @return GeneratorPoint
     */
    public function generator160r1(RandomNumberGeneratorInterface $randomGenerator = null): GeneratorPoint
    {
        $curve = $this->curve160r1();

        $order = gmp_init('E95E4A5F737059DC60DF5991D45029409E60FC09', 16);
        $x = gmp_init('BED5AF16EA3F6A4F62938C4631EB5AF7BDBCDBC3', 16);
        $y = gmp_init('1667CB477A1A8EC338F94741669C976316DA6321', 16);

        return $curve->getGenerator($x, $y, $order, $randomGenerator);
    }

    /**
     * Returns a Brainpool P192 curve.
     *
     * @return NamedCurveFp
     */
    public function curve192r1(): NamedCurveFp
    {
        $p = gmp_init('C302F41D932A36CDA7A3463093D18DB78FCE476DE1A86297', 16);
        $a = gmp_init('6A91174076B1E0E19C39C031FE8685C1CAE040E5C69A28EF', 16);
        $b = gmp_init('469A28EF7C28CCA3DC721D044F4496BCCA7EF4146FBF25C9', 16);

        $parameters = new CurveParameters(192, $p, $a, $b);

        return new NamedCurveFp(self::NAME_P192R1, $parameters, $this->adapter);
    }

    /**
     * Returns a Brainpool P192 generator.
     *
     * @param  RandomNumberGeneratorInterface $randomGenerator
     * @return GeneratorPoint
     */
    public function generator192r1(RandomNumberGeneratorInterface $randomGenerator = null): GeneratorPoint
    {
        $curve = $this->curve192r1();

        $order = gmp_init('C302F41D932A36CDA7A3462F9E9E916B5BE8F1029AC4ACC1', 16);
        $x = gmp_init('C0A0647EAAB6A48753B033C56CB0F0900A2F5C4853375FD6', 16);
        $y = gmp_init('14B690866ABD5BB88B5F4828C1490002E6773FA2FA299B8F', 16);

        return $curve->getGenerator($x, $y, $order, $randomGenerator);
    }

    /**
     * Returns a Brainpool P224 curve.
     *
     * @return NamedCurveFp
     */
    public function curve224r1(): NamedCurveFp
    {
        $p = gmp_init('D7C134AA264366862A18302575D1D787B09F075797DA89F57EC8C0FF', 16);
        $a = gmp_init('68A5E62CA9CE6C1C299803A6C1530B514E182AD8B0042A59CAD29F43', 16);
        $b = gmp_init('2580F63CCFE44138870713B1A92369E33E2135D266DBB372386C400B', 16);

        $parameters = new CurveParameters(224, $p, $a, $b);

        return new NamedCurveFp(self::NAME_P224R1, $parameters, $this->adapter);
    }

    /**
     * Returns a Brainpool P256 generator.
     *
     * @param  RandomNumberGeneratorInterface $randomGenerator
     * @return GeneratorPoint
     */
    public function generator224r1(RandomNumberGeneratorInterface $randomGenerator = null): GeneratorPoint
    {
        $curve = $this->curve224r1();

        $order = gmp_init('D7C134AA264366862A18302575D0FB98D116BC4B6DDEBCA3A5A7939F', 16);
        $x = gmp_init('D9029AD2C7E5CF4340823B2A87DC68C9E4CE3174C1E6EFDEE12C07D', 16);
        $y = gmp_init('58AA56F772C0726F24C6B89E4ECDAC24354B9E99CAA3F6D3761402CD', 16);

        return $curve->getGenerator($x, $y, $order, $randomGenerator);
    }

    /**
     * Returns a Brainpool P256 curve.
     *
     * @return NamedCurveFp
     */
    public function curve256r1(): NamedCurveFp
    {
        $p = gmp_init('A9FB57DBA1EEA9BC3E660A909D838D726E3BF623D52620282013481D1F6E5377', 16);
        $a = gmp_init('7D5A0975FC2C3057EEF67530417AFFE7FB8055C126DC5C6CE94A4B44F330B5D9', 16);
        $b = gmp_init('26DC5C6CE94A4B44F330B5D9BBD77CBF958416295CF7E1CE6BCCDC18FF8C07B6', 16);

        $parameters = new CurveParameters(256, $p, $a, $b);

        return new NamedCurveFp(self::NAME_P256R1, $parameters, $this->adapter);
    }

    /**
     * Returns a Brainpool P256 generator.
     *
     * @param  RandomNumberGeneratorInterface $randomGenerator
     * @return GeneratorPoint
     */
    public function generator256r1(RandomNumberGeneratorInterface $randomGenerator = null): GeneratorPoint
    {
        $curve = $this->curve256r1();

        $order = gmp_init('A9FB57DBA1EEA9BC3E660A909D838D718C397AA3B561A6F7901E0E82974856A7', 16);
        $x = gmp_init('8BD2AEB9CB7E57CB2C4B482FFC81B7AFB9DE27E1E3BD23C23A4453BD9ACE3262', 16);
        $y = gmp_init('547EF835C3DAC4FD97F8461A14611DC9C27745132DED8E545C1D54C72F046997', 16);

        return $curve->getGenerator($x, $y, $order, $randomGenerator);
    }

    /**
     * Returns a Brainpool P330 curve.
     *
     * @return NamedCurveFp
     */
    public function curve330r1(): NamedCurveFp
    {
        $p = gmp_init('D35E472036BC4FB7E13C785ED201E065F98FCFA6F6F40DEF4F92B9EC7893EC28FCD412B1F1B32E27', 16);
        $a = gmp_init('3EE30B568FBAB0F883CCEBD46D3F3BB8A2A73513F5EB79DA66190EB085FFA9F492F375A97D860EB4', 16);
        $b = gmp_init('520883949DFDBC42D3AD198640688A6FE13F41349554B49ACC31DCCD884539816F5EB4AC8FB1F1A6', 16);

        $parameters = new CurveParameters(330, $p, $a, $b);

        return new NamedCurveFp(self::NAME_P330R1, $parameters, $this->adapter);
    }

    /**
     * Returns a Brainpool P330 generator.
     *
     * @param  RandomNumberGeneratorInterface $randomGenerator
     * @return GeneratorPoint
     */
    public function generator330r1(RandomNumberGeneratorInterface $randomGenerator = null): GeneratorPoint
    {
        $curve = $this->curve330r1();

        $order = gmp_init('D35E472036BC4FB7E13C785ED201E065F98FCFA5B68F12A32D482EC7EE8658E98691555B44C59311', 16);
        $x = gmp_init('43BD7E9AFB53D8B85289BCC48EE5BFE6F20137D10A087EB6E7871E2A10A599C710AF8D0D39E20611', 16);
        $y = gmp_init('14FDD05545EC1CC8AB4093247F77275E0743FFED117182EAA9C77877AAAC6AC7D35245D1692E8EE1', 16);

        return $curve->getGenerator($x, $y, $order, $randomGenerator);
    }

    /**
     * Returns a Brainpool P384 curve.
     *
     * @return NamedCurveFp
     */
    public function curve384r1(): NamedCurveFp
    {
        $p = gmp_init('8CB91E82A3386D280F5D6F7E50E641DF152F7109ED5456B412B1DA197FB71123ACD3A729901D1A71874700133107EC53', 16);
        $a = gmp_init('7BC382C63D8C150C3C72080ACE05AFA0C2BEA28E4FB22787139165EFBA91F90F8AA5814A503AD4EB04A8C7DD22CE2826', 16);
        $b = gmp_init('4A8C7DD22CE28268B39B55416F0447C2FB77DE107DCD2A62E880EA53EEB62D57CB4390295DBC9943AB78696FA504C11', 16);

        $parameters = new CurveParameters(384, $p, $a, $b);

        return new NamedCurveFp(self::NAME_P384R1, $parameters, $this->adapter);
    }

    /**
     * Returns a Brainpool P384 generator.
     *
     * @param  RandomNumberGeneratorInterface $randomGenerator
     * @return GeneratorPoint
     */
    public function generator384r1(RandomNumberGeneratorInterface $randomGenerator = null): GeneratorPoint
    {
        $curve = $this->curve384r1();

        $order = gmp_init('8CB91E82A3386D280F5D6F7E50E641DF152F7109ED5456B31F166E6CAC0425A7CF3AB6AF6B7FC3103B883202E9046565', 16);
        $x = gmp_init('1D1C64F068CF45FFA2A63A81B7C13F6B8847A3E77EF14FE3DB7FCAFE0CBD10E8E826E03436D646AAEF87B2E247D4AF1E', 16);
        $y = gmp_init('8ABE1D7520F9C2A45CB1EB8E95CFD55262B70B29FEEC5864E19C054FF99129280E4646217791811142820341263C5315', 16);

        return $curve->getGenerator($x, $y, $order, $randomGenerator);
    }

    /**
     * Returns a Brainpool P512 curve.
     *
     * @return NamedCurveFp
     */
    public function curve512r1(): NamedCurveFp
    {
        $p = gmp_init('AADD9DB8DBE9C48B3FD4E6AE33C9FC07CB308DB3B3C9D20ED6639CCA703308717D4D9B009BC66842AECDA12AE6A380E62881FF2F2D82C68528AA6056583A48F3', 16);
        $a = gmp_init('7830A3318B603B89E2327145AC234CC594CBDD8D3DF91610A83441CAEA9863BC2DED5D5AA8253AA10A2EF1C98B9AC8B57F1117A72BF2C7B9E7C1AC4D77FC94CA', 16);
        $b = gmp_init('3DF91610A83441CAEA9863BC2DED5D5AA8253AA10A2EF1C98B9AC8B57F1117A72BF2C7B9E7C1AC4D77FC94CADC083E67984050B75EBAE5DD2809BD638016F723', 16);

        $parameters = new CurveParameters(512, $p, $a, $b);

        return new NamedCurveFp(self::NAME_P512R1, $parameters, $this->adapter);
    }

    /**
     * Returns a Brainpool P512 generator.
     *
     * @param  RandomNumberGeneratorInterface $randomGenerator
     * @return GeneratorPoint
     */
    public function generator512r1(RandomNumberGeneratorInterface $randomGenerator = null): GeneratorPoint
    {
        $curve = $this->curve512r1();

        $order = gmp_init('AADD9DB8DBE9C48B3FD4E6AE33C9FC07CB308DB3B3C9D20ED6639CCA70330870553E5C414CA92619418661197FAC10471DB1D381085DDADDB58796829CA90069', 16);
        $x = gmp_init('81AEE4BDD82ED9645A21322E9C4C6A9385ED9F70B5D916C1B43B62EEF4D0098EFF3B1F78E2D0D48D50D1687B93B97D5F7C6D5047406A5E688B352209BCB9F822', 16);
        $y = gmp_init('7DDE385D566332ECC0EABFA9CF7822FDF209F70024A57B1AA000C55B881F8111B2DCDE494A5F485E5BCA4BD88A2763AED1CA2B2FA8F0540678CD1E0F3AD80892', 16);

        return $curve->getGenerator($x, $y, $order, $randomGenerator);
    }
}
