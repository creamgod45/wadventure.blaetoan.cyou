<?php

namespace Shop;

use Nette\Utils\DateTime;
use Utils\Utils;

class ShopItem
{
    public string $ItemID = "";
    public string $name = "";
    public string $description = "無";
    public float $price = 0.0;
    public int $amount = 0;
    public int $purchases_num = 0;
    public int $creatAt;
    public DateTime $updateAt;

    /**
     * @param string $ItemID
     * @param string $name
     * @param string $description
     * @param float $price
     * @param int $amount
     * @param int $purchases_num
     * @param int $creatAt
     * @param DateTime $updateAt
     */
    public function __construct(string $ItemID, string $name, string $description, float $price, int $amount, int $purchases_num, int $creatAt, DateTime $updateAt)
    {
        $this->ItemID = $ItemID;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->amount = $amount;
        $this->purchases_num = $purchases_num;
        $this->creatAt = $creatAt;
        $this->updateAt = $updateAt;
    }

    /**
     * @return string
     */
    public function getItemID(): string
    {
        return $this->ItemID;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function getPurchasesNum(): int
    {
        return $this->purchases_num;
    }

    /**
     * @return int
     */
    public function getCreatAt(): int
    {
        return $this->creatAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdateAt(): DateTime
    {
        return $this->updateAt;
    }

    public function overrideClass(ShopItem $shopItem, bool $FullOverride = true)
    {
        if ($FullOverride) {
            $this->ItemID = $shopItem->ItemID;
        } else {
            $this->ItemID = md5((new Utils())->uid());
        }
        $this->name = $shopItem->name;
        $this->description = $shopItem->description;
        $this->price = $shopItem->price;
        $this->amount = $shopItem->amount;
        $this->purchases_num = $shopItem->purchases_num;
        $this->creatAt = $shopItem->creatAt;
        $this->updateAt = $shopItem->updateAt;
    }
}